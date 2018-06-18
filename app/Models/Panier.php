<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Panier
 * 
 * @property int $id_panier
 * @property int $ref_id_utilisateur
 * @property int $ref_id_panierproduit
 * @property \Carbon\Carbon $date
 * @property int $quantite
 * @property string $statut
 * 
 * @property \App\Models\Utilisateur $utilisateur
 * @property \App\Models\Produit $produit
 *
 * @package App\Models
 */
class Panier extends Eloquent
{
	protected $table = 'panier';
	protected $primaryKey = 'id_panier';
	public $timestamps = false;

	protected $casts = [
		'ref_id_utilisateur' => 'int',
		'ref_id_panierproduit' => 'int',
		'quantite' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'ref_id_utilisateur',
		'ref_id_panierproduit',
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
		return $this->belongsTo(\App\Models\Panierproduit::class, 'ref_id_produit');
	}
}
