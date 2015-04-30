<?php namespace App;

use DB;
use Mail;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

    // Database table
	protected $table = 'users';

    // These attributes are eligible for mass assignment
	protected $fillable = ['first_name', 'last_name', 'wants_spot', 'has_spot', 'phone_number', 'email', 'alert_setting', 'password'];

    // These attributes are hidden in the database
	protected $hidden = ['password', 'remember_token'];

	// Sets up the relationship between Employee and Spot
	public function spot()
    {
        return $this->hasOne('App\Spot');
    }

// METHODS

    // Returns all spots given up by spot owners
    public function openSpots()
    {
        return DB::table('open_spots')->where('user_id', $this->id)->get();
    }

    // Method for when an employee accepts a spot
    public function acceptSpot($spot)
    {
        if ($spot->status == 'pending' && $this->wants_spot == 1 && $this->has_spot == 0) {
            $this->update(['wants_spot' => 0, 'has_spot' => 1]);
            $spot->update(['status' => 'accepted']);
            DB::table('open_spots')
                ->where('spot_id', $spot->id)
                ->update(['assigned_user_id' => $this->id]);
        }
    }

    // Method for when an employee gives up a spot
    public function giveUpSpot($open_date, $end_date)
    {
        if ($this->spot->status == 'accepted') {
            $this->spot->update(['status' => 'pending']);
            DB::table('open_spots')->insert([
                'spot_id' => $this->spot->id,
                'user_id' => $this->id,
                'open_date' => $open_date,
                'end_date' => $end_date    
            ]);
        }
    }
    
    // Method for when an employee wants to reclaim a spot (spot owner)
    public function reclaimSpot()
    {
        if ($this->spot->status == 'pending') {
            $this->spot->update(['status' => 'closed']);
        }
    }

    // Method for when an employee wants to release a spot (spot recipient)
    public function releaseSpot($spot)
    {
        if ($spot->status == 'accepted' && $this->has_spot == 1) {
            $spot->update(['status' => 'pending']);
            $this->update(['has_spot' => 0]);
            DB::table('open_spots')
                ->where('spot_id', $spot->id)
                ->update(['assigned_user_id' => null]);
        }
    }

    // Sends notification to employee when spot becomes pending
    public function sendNotification()
    {
        Mail::send('emails.parking', [], function($message) {
            $message->to($this->email, $this->first_name . ' ' . $this->last_name)->subject('A parking spot has just opened up for you.');
        });


        // while ($this->spot->status == 'pending') {
        //     // send email notification logic
        // }
    }

    // Determines if an employee is an admin
    public function isAdmin()
    {
        if ($this->admin == 1) {
            return true;
        } else {
            return false;
        }
    }

    // Toggles spot status between pending and accepted and updates database
    public function toggleSpotStatus()
    {
        if ($this->spot->status == 'pending') {
            $this->spot->update(['status' => 'accepted']);
        } elseif ($this->spot->status == 'accepted') {
            $this->spot->update(['status' => 'pending']);
        }
    }

    // Toggles want_spot attribute of employee => 1: wants, 0: doesn't want
    public function toggleWantsSpot()
    {
    	if ($this->wants_spot == 1) {
	    	$this->update(['wants_spot' => 0]);
        } elseif ($this->wants_spot == 0) {
            $this->update(['wants_spot' => 1]);
        }
    }

    // Toggles has_spot attribute of employee => 1: has, 0: doesn't have
    public function toggleHasSpot()
    {
    	if ($this->has_spot == 1) {
            $this->update(['has_spot' => 0]);
    	} elseif ($this->has_spot == 0) {
            $this->update(['has_spot' => 1]);
    	}
    }

    // Toggles admin attribute of employee => 1: is admin, 0: not admin
    // 
    // NOT WORKING DUE TO MASS ASSIGNMENT - need Admin class?
    // 
    public function toggleAdmin()
    {
    	if ($this->admin == 1) {
            $this->update(['admin' => 0]);
    	} elseif ($this->admin == 0) {
            $this->update(['admin' => 1]);
    	}
    }

    // Toggles active attribute of employee => 1: is active, 0: not active
    // 
    // NOT WORKING DUE TO MASS ASSIGNMENT - need Admin class?
    // 
    public function toggleActive()
    {
    	if ($this->active == 1) {
            $this->update(['active' => 0]);
    	} elseif ($this->active == 0) {
            $this->update(['active' => 1]);
    	}
    }

    // Changes alert setting for employees
    public function changeAlert($alert)
    {
        $this->update(['alert_setting' => $alert]);
    }

// SCOPE QUERIES

    // Returns employees who are admins
    public function scopeAdmin($query)
    {
        $query->where('admin', '=', 1);
    }

    // Returns employees who are NOT admins
    public function scopeNotAdmin($query)
    {
        $query->where('admin', '!=', 1);
    }

    // Returns employees who are active
    public function scopeActive($query)
    {
        $query->where('active', '=', 1);
    }

    // Returns employees who are NOT active
    public function scopeNotActive($query)
    {
        $query->where('active', '!=', 1);
    }

    // Returns employees who want a spot
    public function scopeWantsSpot($query)
    {
        $query->where('wants_spot', '=', 1);
    }

    // Returns employees who DO NOT want a spot
    public function scopeDoesntWantSpot($query)
    {
        $query->where('wants_spot', '!=', 1);
    }

    // Returns employees who have a spot
    public function scopeHasSpot($query)
    {
        $query->where('has_spot', '=', 1);
    }

    // Returns employees who DO NOT have a spot
    public function scopeNoSpot($query)
    {
        $query->where('has_spot', '!=', 1);
    }
}