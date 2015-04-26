<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model {

	// Sets up the relationship between Spot and Employee
	public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    // Toggles spot status between available and taken and updates database
    public function toggleSpotStatus()
    {
    	if ($this->status == 'available') {
            $this->status = 'taken';
            DB::table('spots')
                ->where('id', $this->id)
                ->update(['status' => 'taken']);
    	} elseif ($this->status == 'taken') {
            $this->status = 'available';
            DB::table('spots')
                ->where('id', $this->id)
                ->update(['status' => 'available']);
    	}
    }

    // Sends notification to employee when spot becomes available
    public function sendNotification()
    {
        while ($this->status == 'available') {
            // send email notification logic
        }
    }

    // Method for when an employee gives up a spot
    public function giveUpSpot()
    {
        if ($this->status == 'taken') {
            $this->status = 'available';
            DB::table('spots')
                ->where('id', $this->id)
                ->update(['status' => 'available']);
            DB::table('open_spots')->insert(
                ['spot_id' => $this->id, 'employee_id' => $this->employee_id]
            );
            // open_date and end_date will be added to open_spots table once that functionality is built out  
        }
    }
}