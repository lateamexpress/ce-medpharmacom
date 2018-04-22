<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Image
 *
 * @property int $id_image
 * @property string $lien
 * @property string $nom
 *
 * @package App\Models
 */
class Image extends Eloquent
{
    protected $table = 'image';
    protected $primaryKey = 'id_image';
    public $timestamps = false;

    protected $fillable = [
        'lien',
        'nom',
    ];

}
