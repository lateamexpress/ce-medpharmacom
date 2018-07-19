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
 * @property string $ref_id_image
 * @property string $ref_id_marque
 * @property int $ref_id_categorie
 *
 * @property \App\Models\Categorie $image
 * @property \App\Models\Categorie $marque
 * @property \App\Models\Categorie $categorie
 * @property \Illuminate\Database\Eloquent\Collection $commandes
 * @property \Illuminate\Database\Eloquent\Collection $commandeproduit
 *
 * @package App\Models
 */
class Produit extends Eloquent
{
	protected $table = 'produit';
	protected $primaryKey = 'id_produit';
	public $timestamps = false;

	protected $casts = [
        'ref_id_image' => 'int',
        'ref_id_marque' => 'int',
		'ref_id_categorie' => 'int'
	];

	protected $fillable = [
		'nom_produit',
		'cout',
		'description',
        'ref_id_image',
        'ref_id_marque',
		'ref_id_categorie'
	];

    public function image()
    {
        return $this->belongsTo(\App\Models\Image::class, 'ref_id_image');
    }

    public function marque()
    {
        return $this->belongsTo(\App\Models\Marque::class, 'ref_id_marque');
    }

    public function categorie()
	{
		return $this->belongsTo(\App\Models\Categorie::class, 'ref_id_categorie');
	}

    public function commandeproduit()
    {
        return $this->hasMany(\App\Models\Commandeproduit::class, 'ref_id_produit');
    }

}
