<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Generique
 *
 * @property int $id_generique
 * @property int $cip7
 * @property string $title
 * @property string $princeps
 * @property int $ref_id_image
 * @property string $ref_id_labo
 * @property string $classe
 * @property string $actif
 * @property string $exip
 * @property string $statut
 * @property string $tx
 * @property string $presentation
 * @property string $precaution
 * @property string $grosse
 * @property string $effets
 * @property string $indic
 * @property string $patho
 *
 * @property \App\Models\Image $image
 * @property \App\Models\Laboratoire $laboratoire
 *
 * @package App\Models
 */
class Generique extends Eloquent
{
    protected $table = 'generique';
    protected $primaryKey = 'id_generique';
    public $timestamps = false;

    protected $casts = [
        'cip7' => 'int',
        'ref_id_image' => 'int',
        'ref_id_labo' => 'int'
    ];

    protected $fillable = [
        'cip7',
        'title',
        'princeps',
        'ref_id_image',
        'ref_id_labo',
        'classe',
        'actif',
        'exip',
        'statut',
        'tx',
        'presentation',
        'precaution',
        'grosse',
        'effets',
        'indic',
        'patho'
    ];

    public function image()
    {
        return $this->belongsTo(\App\Models\Image::class, '$ref_id_image');
    }

    public function laboratoire()
    {
        return $this->belongsTo(\App\Models\Laboratoire::class, 'ref_id_labo');
    }
}
