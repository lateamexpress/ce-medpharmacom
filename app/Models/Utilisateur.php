<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Utilisateur
 * 
 * @property int $id_utilisateur
 * @property string $courriel
 * @property string $mdp
 * @property string $nom
 * @property string $prenom
 * @property string $tel
 * @property string $adresse
 * @property int $nbr_point
 * @property string $role
 * 
 * @property \Illuminate\Database\Eloquent\Collection $commandes
 *
 * @package App\Models
 */
class Utilisateur extends Authenticatable
{
	protected $table = 'utilisateur';
	protected $primaryKey = 'id_utilisateur';
	public $timestamps = true;

	protected $casts = [
		'nbr_point' => 'int'
	];

	protected $fillable = [
		'email',
		'mdp',
		'nom',
		'prenom',
		'tel',
		'adresse',
		'code_postal',
		"ville",
		'nbr_point',
		'role'
	];

	public function commandes()
	{
		return $this->hasMany(\App\Models\Commande::class, 'ref_id_utilisateur');
	}
}
