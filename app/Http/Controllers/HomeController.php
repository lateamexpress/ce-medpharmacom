<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // testing affichage

    public function returnView() {
        return view('vitrine/home');
    }

    // Rss testing

    public function index() {
        $rss = $this->lit_rss("http://www.lequotidiendupharmacien.fr/rss/info/rss.xml",array("title","link","description","pubDate"));
        $cpt = 0;

        $datas = array();

        foreach($rss as $tab){
            $date =  date("d/m/y",strtotime($tab[3]));
            echo '<div class="container" style="margin-top: 100px; text-align: center;">';
            echo '<div class="col s12 m3">';
            if(substr($tab[2],4,3) == 'img'){
                if(($cpt % 4) == 0)
                    explode('&gt;',$tab[2]);
                $urlImage = explode('&quot;', $tab[2]);

                if(filter_var($urlImage[3], FILTER_VALIDATE_URL)) {
                    $urlImage[3] = str_replace("articles_list_small","homepage_large", $urlImage[3]);
                }
                $article = strip_tags(htmlspecialchars_decode($tab[2],ENT_HTML5|ENT_QUOTES)); //substr($tab[2],4,3)$texte[1];
                $article = $this->raccourcirChaine($article, 100);
                $tab[0] = $this->raccourcirChaine($tab[0], 65);
                echo '<div class="icon-block">';
                echo '<a href="'.$tab[1].'" target="_blank"><img class="responsive-img" src="'.$urlImage[3].'"/></a>';
                echo '<p class="center" style="font-style:italic; line-height: 1rem;">Posté le '.$date.'</p>';
                echo '<a href="'.$tab[1].'" title="Lien vers l\'article" rel="bookmark" target="_blank" class="bleu"><h5 class="center">'.$tab[0].'</h5></a>';
                echo '<p class="light">'.$article.'</p>';
                echo'</div>';
                $cpt++;

                $datas = [
                    'title' => $tab[0],
                    'date' => $date,
                    'img' => $urlImage[3],
                    'href' => $tab[1],
                    'texte' => $article
                ];

            }
            else{
                if(($cpt % 4) == 0)
                   explode('&gt;',$tab[2]);
                // $urlImage = explode('&quot;', $tab[2]);
                $article = strip_tags(htmlspecialchars_decode($tab[2],ENT_HTML5|ENT_QUOTES)); //substr($tab[2],4,3)$texte[1];
                $article = $this->raccourcirChaine($article, 100);
                $tab[0] = $this->raccourcirChaine($tab[0], 65);
                echo '<div class="icon-block">';
                echo '<a href="'.$tab[1].'" target="_blank"><img class="responsive-img" src="images/le_quotidien_du_pharmacien2.bmp"/></a>';
                echo '<p class="center" style="font-style:italic; line-height: 1rem;">Posté le '.$date.'</p>';
                echo '<a href="'.$tab[1].'" title="Lien vers l\'article" rel="bookmark" target="_blank" class="bleu"><h5 class="center">'.$tab[0].'</h5></a>';
                echo '<p class="light">'.$article.'</p>';
                echo'</div>';
                $cpt++;

                $datas = [
                    'title' => $tab[0],
                    'date' => $date,
                    'href' => $tab[1],
                    'texte' => $article
                ];
            }
            echo '</div></div>';
        }
        echo '</div>';

        return view('vitrine/news')->with('datas', $datas);
    }
    public function lit_rss($fichier,$objets) {
        // on lit tout le fichier
        if($chaine = @implode("",@file($fichier))) {
            // on découpe la chaine obtenue en items
            $tmp = preg_split("/<\/?"."item".">/",$chaine);

            // pour chaque item
            for($i=1;$i<sizeof($tmp)-1;$i+=2)
                // on lit chaque objet de l'item
                foreach($objets as $objet) {

                    // on découpe la chaine pour obtenir le contenu de l'objet
                    $tmp2 = preg_split("/<\/?".$objet.">/",$tmp[$i]);

                    // on ajoute le contenu de l'objet au tableau resultat
                    $resultat[$i-1][] = @$tmp2[1];
                }
            // on retourne le tableau resultat
            return $resultat;
        }
    }
    public function raccourcirChaine($chaine, $tailleMax)
    {
        // Variable locale
        $positionDernierEspace = 0;
        if( strlen($chaine) >= $tailleMax )
        {
            $chaine = substr($chaine,0,$tailleMax);
            $positionDernierEspace = strrpos($chaine,' ');
            $chaine = substr($chaine,0,$positionDernierEspace).'...';
        }
        return $chaine;
    }
}
