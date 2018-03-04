<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Commande
 * 
 * @property int $id_commande
 * @property int $ref_id_utilisateur
 * @property int $ref_id_produit
 * @property \Carbon\Carbon $date
 * @property int $quantite
 * @property string $statut
 * 
 * @property \App\Models\Utilisateur $utilisateur
 * @property \App\Models\Produit $produit
 *
 * @package App\Models
 */
class Commande extends Eloquent
{
	protected $table = 'commande';
	protected $primaryKey = 'id_commande';
	public $timestamps = false;

	protected $casts = [
		'ref_id_utilisateur' => 'int',
		'ref_id_produit' => 'int',
		'quantite' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'ref_id_utilisateur',
		'ref_id_produit',
		'date',
		'quantite',
		'statut'
	];

	public function utilisateur()
	{
		return $this->belongsTo(\App\Models\Utilisateur::class, 'ref_id_utilisateur');
	}

	public function produit()
	{
		return $this->belongsTo(\App\Models\Produit::class, 'ref_id_produit');
	}
}
