<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "materials";

    protected $fillable = ['group_materials'];

    public function projects(){
        return $this->belongsToMany('App\Project');
    }

    public function purchasers(){
        return $this->belongsToMany('App\Purchaser');
    }
}
