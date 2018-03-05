<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\Utilisateur::create( [
        'email' => "admin",
        'password' => bcrypt("12345"),
        'nom' => "Moché",
        'prenom' => "Matagrin",
        'tel' => "0606060606",
        'adresse' => "31 rue du pond levis",
        'nbr_point' => 100,
        'role' => "admin"
        ]);

        $admin = \App\Models\Utilisateur::create( [
            'email' => "users",
            'password' => bcrypt("12345"),
            'nom' => "Moché",
            'prenom' => "Matagrin",
            'tel' => "0606060606",
            'adresse' => "31 rue du pond levis",
            'nbr_point' => 100,
            'role' => "users"
        ]);
    }
}
