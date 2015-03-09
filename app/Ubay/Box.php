<?php namespace App\Ubay;

use Illuminate\Database\Eloquent\Model;

class Box extends Model {

    protected $table = 'boxes';

    public function users()
    {
    	return $this->hasMany('App\Ubay\User', 'user_id', 'id');
    }

}
