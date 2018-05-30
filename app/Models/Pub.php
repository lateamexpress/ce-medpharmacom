<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pub
 *
 * @property int $id_pub
 * @property string $nom
 * @property string $lien
 * @property int $ref_id_image
 * @property int $actif
 *
 * @property \Illuminate\Database\Eloquent\Collection $produits
 *
 * @package App\Models
 */
class Pub extends Eloquent
{
    protected $table = 'pub';
    protected $primaryKey = 'id_pub';
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'lien ',
        'ref_id_image',
        'actif'
    ];
}