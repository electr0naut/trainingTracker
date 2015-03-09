<?php namespace App\Ubay;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $table = 'roles';

    public function users()
    {
        return $this->hasMany('App\Ubay\User', 'user_id', 'id');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Ubay\Permission');
    }
}