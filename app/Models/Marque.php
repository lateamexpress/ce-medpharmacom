<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Marque
 * 
 * @property int $id_marque
 * @property string $nom_marque
 * 
 * @property \Illuminate\Database\Eloquent\Collection $produits
 *
 * @package App\Models
 */
class Marque extends Eloquent
{
	protected $table = 'marque';
	protected $primaryKey = 'id_marque';
	public $timestamps = false;

	protected $fillable = [
		'nom_marque'
	];

	public function produits()
	{
		return $this->hasMany(\App\Models\Produit::class, 'ref_id_marque');
	}
}
