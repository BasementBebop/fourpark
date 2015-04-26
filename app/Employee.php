<?php namespace App;

use DB;
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


	// Sets up the relationship between Employee and Spot
	public function spot()
    {
        return $this->hasOne('App\Spot');
    }

    // Toggles want_spot attribute of employee => 1: wants, 0: doesn't want
    public function toggleWantsSpot()
    {
    	if ($this->wants_spot == 1) {
	    	$this->wants_spot = 0;
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['wants_spot' => 0]);
        } elseif ($this->wants_spot == 0) {
            $this->wants_spot = 1;
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['wants_spot' => 1]);
        }
    }

    // Toggles has_spot attribute of employee => 1: has, 0: doesn't have
    public function toggleHasSpot()
    {
    	if ($this->has_spot == 1) {
	    	$this->has_spot = 0;
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['has_spot' => 0]);
    	} elseif ($this->has_spot == 0) {
    		$this->has_spot = 1;
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['has_spot' => 1]);
    	}
    }

    // Toggles admin attribute of employee => 1: is admin, 0: not admin
    public function toggleAdmin()
    {
    	if ($this->admin == 1) {
	    	$this->admin = 0;
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['admin' => 0]);
    	} elseif ($this->admin == 0) {
    		$this->admin = 1;
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['admin' => 1]);
    	}
    }

    // Toggles active attribute of employee => 1: is active, 0: not active
    public function toggleActive()
    {
    	if ($this->active == 1) {
	    	$this->active = 0;
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['active' => 0]);
    	} elseif ($this->active == 0) {
    		$this->active = 1;
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['active' => 1]);
    	}
    }

    // Changes alert setting for employees
    public function changeAlert($alert)
    {
        if ($alert == 'email') {
            $this->alert_setting = 'email';
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['alert_setting' => 'email']);
        } elseif ($alert == 'sms') {
            $this->alert_setting = 'sms';
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['alert_setting' => 'sms']);
        } elseif ($alert == 'both') {
            $this->alert_setting = 'both';
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['alert_setting' => 'both']);
        } elseif ($alert == 'none') {
            $this->alert_setting = 'none';
            DB::table('employees')
                ->where('id', $this->id)
                ->update(['alert_setting' => 'none']);
        }
    }
}