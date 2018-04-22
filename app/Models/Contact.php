<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 04 Mar 2018 21:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Contact
 * 
 * @property int $id_contact
 * @property string $adresse
 * @property string $cp
 * @property string $ville
 * @property string $tel
 * @property string $fax
 * @property string $email
 *
 * @package App\Models
 */
class Contact extends Eloquent
{
	protected $table = 'contact';
	protected $primaryKey = 'id_contact';
	public $timestamps = false;

	protected $fillable = [
	    'name',
		'address',
        'tel',
        'email',
        'message'
	];

}
