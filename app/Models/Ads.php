<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ads extends Eloquent {

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
