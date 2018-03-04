<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Categorie
 * 
 * @property int $id_categorie
 * @property string $nom_categorie
 * 
 * @property \Illuminate\Database\Eloquent\Collection $produits
 *
 * @package App\Models
 */
class Categorie extends Eloquent
{
	protected $table = 'categorie';
	protected $primaryKey = 'id_categorie';
	public $timestamps = false;

	protected $fillable = [
		'nom_categorie'
	];

	public function produits()
	{
		return $this->hasMany(\App\Models\Produit::class, 'ref_id_categorie');
	}
}
