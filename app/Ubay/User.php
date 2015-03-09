<?php namespace App\Ubay;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function box()
	{
		return $this->belongsTo('App\Ubay\Box');
	}

	public function role()
	{
		return $this->belongsTo('App\Ubay\Role', 'role_id', 'id');
	}	
    
    public function can($perm = null)
    {
        if(is_null($perm)) return false;
        $perms = $this->role->permissions->fetch('name');
        return in_array($perm, $perms->toArray());
    }	

}
