<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class GestionProduitController extends Controller
{
    public function produitAll()
    {
        $produit = Produit::all();

        return view('admin/gestion-produits', [
            'produit' => $produit
        ]);
    }

    public function produitsAll_And_FiveLast()
    {
        $produitAll = Produit::all();
        $poduitLastFive = Produit::all()->sortByDesc('id_produit')->take(5);

        return view('admin/gestion-produits',[
            'produit' => $produitAll,
            'produitLastFive' => $poduitLastFive
        ]);
    }

    public function produitById($id)
    {
        $produit = Produit::find($id);

        return view('admin/gestion-produits-solo', [
            'produit' => $produit
        ]);
    }

    public function produitAjouter(Request $request)
    {
        Produit::create(Input::all());
        return redirect()->back()->with('flash_message', 'Produit ajouté');
    }

    public function produitModifier(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->nom_produit = $request->nom_produit;
        $produit->ref_id_image = $request->ref_id_image;
        $produit->ref_id_categorie = $request->ref_id_categorie;
        $produit->cout = $request->cout;
        $produit->description = $request->description;

        $produit->save();
        return redirect()->back()->with('flash_message', 'Produit modifié');
    }

    public function produitSupprimer($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->back()->with('flash_message', 'Produit supprimé');
    }

    public function produitAjouterByCSV()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "medpharmacom";

// Create connection
        $conn = new \mysqli($servername, $username, $password, $dbname);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully<br />\n";


/////////////////////////// AJOUT DANS UN ARRAY DU CONTENU DU CSV ////////////////////////////////////////////////////////
        //$ligne;
        $title = TRUE;
        if (($handle = fopen("../storage/app/Produits/gabarit.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, "\n")) !== FALSE) {
                $num = count($data);
                for ($c = 0; $c < $num; $c++) {
                    if(!$title){
                        $ligne = explode(";", $data[$c]);

                        $ligne[0] = mysqli_escape_string($conn, str_replace('"', "", $ligne[0]));
                        $ligne[1] = mysqli_escape_string($conn, str_replace('"', "", $ligne[1]));
                        $ligne[2] = mysqli_escape_string($conn, str_replace('"', "", $ligne[2]));
                        $ligne[3] = mysqli_escape_string($conn, str_replace('"', "", $ligne[3]));
                        $ligne[4] = mysqli_escape_string($conn, str_replace('"', "", $ligne[4]));
                        $ligne[5] = mysqli_escape_string($conn, str_replace('"', "", $ligne[5]));

                        $sqlImage = "SELECT * FROM `image` WHERE `nom` LIKE '$ligne[3]'";
                        //$refIdImage;
                        $result = $conn->query($sqlImage);

                        if($result->fetch_row() === NULL) {
                            $sqlInsertImage = "INSERT INTO image (`lien`, `nom`) VALUES ('$ligne[3].png', '$ligne[3]')";
                            $conn->query($sqlInsertImage);
                            $result = $conn->query($sqlImage);
                        }
                        mysqli_data_seek($result, 0);
                        while ($row = $result->fetch_row()) {
                            $refIdImage = $row[0];
                        }

                        $sqlMarque = "SELECT * FROM `marque` WHERE `nom_marque` LIKE '$ligne[4]'";
                        //$refIdMarque;
                        $result = $conn->query($sqlMarque);

                        if($result->fetch_row() === NULL) {
                            $sqlInsertMarque = "INSERT INTO marque (`nom_marque`) VALUES ('$ligne[4]')";
                            $conn->query($sqlInsertMarque);
                            $result = $conn->query($sqlMarque);
                        }
                        mysqli_data_seek($result, 0);
                        while ($row = $result->fetch_row()) {
                            $refIdMarque = $row[0];
                        }

                        $sqlCategorie = "SELECT * FROM `categorie` WHERE `nom_categorie` LIKE '$ligne[5]'";
                        //$refIdCategorie;
                        $result = $conn->query($sqlCategorie);

                        if($result->fetch_row() === NULL) {
                            $sqlInsertCategorie = "INSERT INTO categorie (`nom_categorie`) VALUES ('$ligne[5]')";
                            $conn->query($sqlInsertCategorie);
                            $result = $conn->query($sqlCategorie);
                        }
                        mysqli_data_seek($result, 0);
                        while ($row = $result->fetch_row()) {
                            $refIdCategorie = $row[0];
                        }
                        ///////////////////////// TENTATIVE D'INSERT AUTOCARISTE DANS BDD /////////////////////////////////////////////////////

                        $sqlUtilisateur = "INSERT INTO produit (`nom_produit`, `cout`,`description`,`ref_id_image`,`ref_id_marque`,`ref_id_categorie`)
    VALUES ('$ligne[0]', $ligne[1], '$ligne[2]', '$refIdImage', '$refIdMarque', '$refIdCategorie')";

                        //echo $sqlUtilisateur;
                        if ($conn->query($sqlUtilisateur) === TRUE) {
                            //echo "New record created successfully<br />\n";
                        } else {
                            echo "Error: " . $sqlUtilisateur . "<br>" . $conn->error;
                        }
                    }
                    $title = FALSE;
                }
            }
            fclose($handle);
        }
////////////////////// FERMETURE DE LA BDD ////////////////////////////////////////////////////////
        $conn->close();
        return redirect()->back()->with('flash_message', 'Produits ajoutés');
    }
}
