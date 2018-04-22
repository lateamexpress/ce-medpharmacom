<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Laboratoire
 *
 * @property int $id_laboratoire
 * @property string $nom
 * @property int $ref_id_image
 * @property string $adresse
 * @property string $tel
 * @property string $fax
 * @property string $site
 *
 * @property \App\Models\Image $image
 *
 * @package App\Models
 */
class Laboratoire extends Eloquent
{
    protected $table = 'laboratoire';
    protected $primaryKey = 'id_laboratoire';
    public $timestamps = false;

    protected $casts = [
        'ref_id_image' => 'int',
    ];

    protected $fillable = [
        'nom',
        'ref_id_image',
        'adresse',
        'tel',
        'fax',
        'site'
    ];

    public function image()
    {
        return $this->belongsTo(\App\Models\Image::class, 'ref_id_image');
    }
}
