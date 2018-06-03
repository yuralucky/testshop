<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $guarded = [
        'id'
    ];

    public function category()
    {
        return $this->hasOne("App\Category");
    }
}
