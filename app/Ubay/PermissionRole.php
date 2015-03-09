<?php namespace App\Ubay;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model {

    protected $table = 'permission_role';

    public function roles()
    {
        return $this->belongsToMany('App\Ubay\Role');
    }
    public function permissions()
    {
        return $this->belongsToMany('App\Ubay\Permission');
    }    
}
