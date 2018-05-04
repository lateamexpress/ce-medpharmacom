<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GestionController extends Controller
{

    public function centres()
    {
        return view('admin/gestion-centres');
    }

    public function commandes()
    {
        return view('admin/gestion-commandes');
    }

    public function encarts_publicitaires()
    {
        return view('admin/gestion-encarts-publicitaires');
    }

    public function equivalences()
    {
        return view('admin/gestion-equivalences');
    }

    public function laboratoires()
    {
        return view('admin/gestion-laboratoires');
    }

    public function visiteurs()
    {
        return view('admin/gestion-visiteurs');
    }

    public function partenaires()
    {
        return view('admin/gestion-partenaires');
    }

    public function produits()
    {
        return view('admin/gestion-produits');
    }

    public function utilisateurs()
    {
        return view('admin/gestion-utilisateurs');
    }

    public function utilisateursajout()
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
