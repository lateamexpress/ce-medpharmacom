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
        //var_dump($request->file('fileCsv')->path());exit;
        $userFile = fopen("/tmp/utilisateurs.csv","w+");
        fputcsv($userFile,['login','password']);

        if (($handle = fopen($request->file('fileCsv')->path(), "r")) !== FALSE)
        {
            $i = 0;
            $characters = str_split('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()"');
            while (($data = fgetcsv($handle, 1000, "\n")) !== FALSE)
            {
                if(!$i)
                {
                    $i++;
                    continue;
                }
                //$num = count($data);
                $ligne = explode(";", $data[0]);
                $motdepase = 0;
                for($i=0;$i<10;$i++)
                {
                    $motdepase .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
                }
                //dump($ligne);exit;
                //$sqlUtilisateur = "INSERT INTO utilisateur (`email`,`password`,`nom`,`prenom`,`tel`,`adresse`,`code_postal`,`ville`)
        //VALUES ('$ligne[0]','$motdepasseHash','$ligne[1]', '$ligne[2]', '$ligne[3]', '$ligne[4]', '$ligne[5]','$ligne[6]')";
                Utilisateur::create([
                    'email' => $ligne[0],
                    'password' => bcrypt($motdepase),
                    'nom' => $ligne[1],
                    'prenom' => $ligne[2],
                    'tel' => $ligne[3],
                    'adresse' => $ligne[4],
                    'code_postal' => $ligne[5],
                    "ville" => $ligne[6],
                    'nbr_point' => $ligne[7],
                ]);
                fputcsv($userFile,[$ligne[0],$motdepase]);
            }
            fclose($handle);
        }
        fclose($userFile);

        return response()->download("/tmp/utilisateurs.csv")->deleteFileAfterSend(true);
    }

}
