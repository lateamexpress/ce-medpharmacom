<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Produit
 * 
 * @property int $id_produit
 * @property string $nom_produit
 * @property int $cout
 * @property string $description
 * @property string $photo
 * @property int $ref_id_categorie
 * 
 * @property \App\Models\Categorie $categorie
 * @property \Illuminate\Database\Eloquent\Collection $commandes
 *
 * @package App\Models
 */
class Produit extends Eloquent
{
	protected $table = 'produit';
	protected $primaryKey = 'id_produit';
	public $timestamps = false;

	protected $casts = [
		'cout' => 'int',
		'ref_id_categorie' => 'int'
	];

	protected $fillable = [
		'nom_produit',
		'cout',
		'description',
		'photo',
		'ref_id_categorie'
	];

	public function categorie()
	{
		return $this->belongsTo(\App\Models\Categorie::class, 'ref_id_categorie');
	}

	public function commandes()
	{
		return $this->hasMany(\App\Models\Commande::class, 'ref_id_produit');
	}
}
