<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Commandeproduit
 * 
 * @property int $id_commandeproduit
 * @property int $ref_id_commande
 * @property int $ref_id_produit
 * @property int $quantite
 *
 * @property \App\Models\Commande $commande
 * @property \App\Models\Produit $produit
 *
 * @package App\Models
 */
class Commandeproduit extends Eloquent
{
	protected $table = 'commandeproduit';
	protected $primaryKey = '$id_commandeproduit';
	public $timestamps = false;

	protected $casts = [
		'ref_id_commande' => 'int',
		'ref_id_produit' => 'int'
	];

	protected $fillable = [
		'ref_id_commande',
		'ref_id_produit',
        'quantite'
	];

	public function commande()
	{
		return $this->belongsTo(\App\Models\Commande::class, 'ref_id_commande');
	}

	public function produit()
	{
		return $this->belongsTo(\App\Models\Commande::class, 'ref_id_produit');
	}
}
