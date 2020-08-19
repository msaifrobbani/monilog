<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    public function materials(){
        return $this->belongsToMany('App\Material');
    }

    public function purchasers(){
        return $this->belongsToMany('App\Purchaser');
    }
}
