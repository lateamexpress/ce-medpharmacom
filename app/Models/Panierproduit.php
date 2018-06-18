<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Panierproduit
 * 
 * @property int $id_panierproduit
 * @property int $ref_id_panier
 * @property int $ref_id_produit
 *
 * @property \App\Models\Panier $panier
 * @property \App\Models\Produit $produit
 *
 * @package App\Models
 */
class Panierproduit extends Eloquent
{
	protected $table = 'panierproduit';
	protected $primaryKey = '$id_panierproduit';
	public $timestamps = false;

	protected $casts = [
		'ref_id_panier' => 'int',
		'ref_id_produit' => 'int'
	];


	protected $fillable = [
		'ref_id_panierproduit',
		'ref_id_produit'
	];

	public function panier()
	{
		return $this->belongsTo(\App\Models\Panier::class, 'ref_id_utilisateur');
	}

	public function produit()
	{
		return $this->belongsTo(\App\Models\Panier::class, 'ref_id_produit');
	}
}
