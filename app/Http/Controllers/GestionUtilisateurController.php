<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class GestionUtilisateurController extends Controller
{
    public function utilisateurAll()
    {
        $utilisateur = Utilisateur::all();

        return view('admin/Utilisateur ajouté', [
            'utilisateur' => $utilisateur,
        ]);
    }

    public function utilisateurById($id)
    {
        $utilisateur = Utilisateur::find($id);

        return view('admin/Utilisateur ajouté', [
            'utilisateur' => $utilisateur,
        ]);
    }

    public function utilisateurAjouter()
    {
        Utilisateur::create(Input::all());
        return redirect()->back()->with('flash_message', 'Utilisateur ajouté');
    }

    public function utilisateurModifier(Request $request, $id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->nbr_point = $request->nbr_point;
        $utilisateur->email = $request->email;
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->tel = $request->tel;
        $utilisateur->adresse = $request->adresse;
        $utilisateur->code_postal = $request->code_postal;
        $utilisateur->ville = $request->ville;
        $utilisateur->role = $request->role;

        $utilisateur->save();
        return redirect()->back()->with('flash_message', 'Utilisateur modifié');
    }

    public function utilisateurSupprimer($id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->delete();
        return redirect()->back()->with('flash_message', 'Utilisateur supprimé');
    }

    public function utilisateursAjouterByCSV()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "medpharmacom";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if (($handle = fopen("../storage/app/gabarit.csv", "r")) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1000, "\n")) !== FALSE)
            {
                if(!$titre){
                    $num = count($data);
                    $ligne = explode(";", $data[0]);
                    $motdepase = 0;
                    for($i=0;$i<10;$i++)
                    {
                        $motdepase .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
                    }
                    $motdepasseHash = Hash::make(motdepase);
                    $sqlUtilisateur = "INSERT INTO utilisateur (`email`,`password`,`nom`,`prenom`,`tel`,`adresse`,`code_postal`,`ville`)
			VALUES ('$ligne[0]','$motdepasseHash','$ligne[1]', '$ligne[2]', '$ligne[3]', '$ligne[4]', '$ligne[5]','$ligne[6]')";

                    $conn->query($sqlUtilisateur);
                }
                $titre = FALSE;
            }
            fclose($handle);
        }
        $conn->close();


        return redirect()->back()->with('flash_message', 'Utilisateur ajouté');
    }

}
