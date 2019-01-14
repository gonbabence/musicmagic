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

    public function assign($values) {
        foreach ($values as $key => $value) {
            if (isset($this->fillable[$key])) {
                $this->{$key} = $value;
            }
        }
    }

}
