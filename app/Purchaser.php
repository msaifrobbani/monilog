<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchaser extends Model
{
    protected $table = "purchasers";

    protected $fillable = ['nip','nama'];

    public function materials(){
        return $this->belongsToMany('App\Material');
    }

    public function projects(){
        return $this->belongsToMany('App\Project');
    }
}
