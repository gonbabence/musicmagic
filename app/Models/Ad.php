<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ad extends Eloquent {

    /**
     * @var array
     */
    protected $fillable = [
        'condition',
        'mfr',
        'model',
        'price',
        'description'
    ];

}
