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

    // Method for when an employee accepts a spot
    public function acceptSpot()
    {
        if ($this->want_spot == 1) {
            $this->want_spot = 0;
            $this->has_spot = 1;
            DB::table('open_spots')
                // ->where(...) need to figure out
                ->update(['assigned_employee_id' => $this->id]);
        }
    }

    // Method for when an employee gives up a spot
    public function giveUpSpot()
    {
        if ($this->spot->status == 'taken') {
            $this->spot->status = 'available';
            DB::table('spots')
                ->where('id', $this->spot->id)
                ->update(['status' => 'available']);
            DB::table('open_spots')->insert([
                'spot_id' => $this->spot->id,
                'employee_id' => $this->id,
                // open_date and end_date will be added to open_spots table once that functionality is built out  
                'open_date' => null,
                'end_date' => null    
            ]);
        }
    }
    
    // Method for when an employee wants to reclaim a spot (spot owner)
    public function reclaimSpot()
    {
        # code...
    }

    // Method for when an employee wants to release a spot (spot recipient)
    public function releaseSpot()
    {
        # code...
    }

    // Sends notification to employee when spot becomes available
    public function sendNotification()
    {
        while ($this->spot->status == 'available') {
            // send email notification logic
        }
    }

    // Toggles spot status between available and taken and updates database
    public function toggleSpotStatus()
    {
        if ($this->spot->status == 'available') {
            $this->spot->status = 'taken';
            DB::table('spots')
                ->where('id', $this->spot->id)
                ->update(['status' => 'taken']);
        } elseif ($this->spot->status == 'taken') {
            $this->spot->status = 'available';
            DB::table('spots')
                ->where('id', $this->spot->id)
                ->update(['status' => 'available']);
        }
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