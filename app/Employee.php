<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Employee extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'employees';

	protected $fillable = ['first_name', 'last_name', 'wants_spot', 'has_spot', 'phone_number', 'email', 'alert_setting', 'password'];

	protected $hidden = ['password', 'remember_token'];


	// Sets up the relationship between Employee and Spot.
	public function spot()
    {
        return $this->hasOne('App\Spot');
    }

    // Toggles want_spot attribute of employee => 1: wants, 0: doesn't want
    public function toggleWantsSpot()
    {
    	if ($this->wants_spot == 1) {
	    	return $this->wants_spot = 0;
    	} elseif ($this->wants_spot == 0) {
    		return $this->wants_spot = 1;
    	}
    }

    // Toggles has_spot attribute of employee => 1: has, 0: doesn't have
    public function toggleHasSpot()
    {
    	if ($this->has_spot == 1) {
	    	return $this->has_spot = 0;
    	} elseif ($this->has_spot == 0) {
    		return $this->has_spot = 1;
    	}
    }

    // Toggles admin attribute of employee => 1: is admin, 0: not admin
    public function toggleAdmin()
    {
    	if ($this->admin == 1) {
	    	return $this->admin = 0;
    	} elseif ($this->admin == 0) {
    		return $this->admin = 1;
    	}
    }

    // Toggles active attribute of employee => 1: is active, 0: not active
    public function toggleActive()
    {
    	if ($this->active == 1) {
	    	return $this->active = 0;
    	} elseif ($this->active == 0) {
    		return $this->active = 1;
    	}
    }
}