<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class GestionUtilisateurController extends Controller
{
    public function utilisateurAll()
    {
        $utilisateur = Utilisateur::all();

        return view('admin/gestion-utilisateurs', [
            'utilisateur' => $utilisateur,
        ]);
    }

    public function utilisateurById($id)
    {
        $utilisateur = Utilisateur::find($id);

        return view('admin/gestion-utilisateurs-solo', [
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
        $passwordHash = bcrypt($request->password);
        $utilisateur = Utilisateur::find($id);
        $utilisateur->nbr_point = $request->nbr_point;
        $utilisateur->password = $passwordHash;
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

    public function utilisateursAjouterByCSV(Request $request)
    {
        var_dump($request->fileCsv);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "medpharmacom";

        $conn = new \mysqli($servername, $username, $password, $dbname);

        if (($handle = fopen("../storage/app/jojo.csv", "r")) !== FALSE)
        {

            $characters = str_split('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()"');
            while (($data = fgetcsv($handle, 1000, "\n")) !== FALSE)
            {
                //if(!$titre){
                    $num = count($data);
                    $ligne = explode(";", $data[0]);
                    $motdepase = 0;
                    for($i=0;$i<10;$i++)
                    {
                        $motdepase .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
                    }

                    fwrite($data, '1');
                    $motdepasseHash = \Hash::make($motdepase);
                    $sqlUtilisateur = "INSERT INTO utilisateur (`email`,`password`,`nom`,`prenom`,`tel`,`adresse`,`code_postal`,`ville`)
			VALUES ('$ligne[0]','$motdepasseHash','$ligne[1]', '$ligne[2]', '$ligne[3]', '$ligne[4]', '$ligne[5]','$ligne[6]')";

                    $conn->query($sqlUtilisateur);
                //}
                //$titre = FALSE;
            }
            fclose($handle);
        }
        $conn->close();

        $out = fopen('php://output', 'w');
        fputcsv($out, array('this','is some', 'csv "stuff", you know.'));
        var_dump($out);
        fclose($out);

        return redirect()->back()->with('flash_message', 'Utilisateurs ajoutés');
    }

}
