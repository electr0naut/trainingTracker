<?php namespace App\Ubay;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {

    protected $table = 'permissions';

    public function roles()
    {
        return $this->belongsToMany('App\Ubay\Role');
    }
}