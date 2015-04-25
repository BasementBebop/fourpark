<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model {

	// Sets up the relationship between Spot and Employee.
	public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    // Toggles spot status between available and taken
    // Adds spot_id and employee_id to open_spots table
    public function toggleSpotStatus()
    {
    	if ($this->status == 'available') {
	    	return $this->status = 'taken';
    	} elseif ($this->status == 'taken') {
    		DB::insert('insert into open_spots (spot_id, employee_id) values (?, ?)', [$this->id, $this->employee_id]);
    		return $this->status = 'available';
    	}
    }
}