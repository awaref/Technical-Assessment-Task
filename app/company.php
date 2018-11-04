<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = [
        'name', 'email', 'address','tel'
    ];

    public function employees(){
        return $this->hasMany('App\User','company_id','id');
    }
}
