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
 * @property \Carbon\Carbon $date
 * @property string $statut
 * 
 * @property \App\Models\Utilisateur $utilisateur
 * @property \App\Models\Commandeproduit $commandeproduit
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
		'quantite' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'ref_id_utilisateur',
		'date',
		'statut'
	];

	public function utilisateur()
	{
		return $this->belongsTo(\App\Models\Utilisateur::class, 'ref_id_utilisateur');
	}

    public function produit()
	{
		return $this->belongsToMany(Produit::class,'commandeproduit','ref_id_commande','ref_id_produit');
	}
}
