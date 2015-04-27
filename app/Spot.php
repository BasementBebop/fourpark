<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model {

    // Database table
    protected $table = 'spots';

    // These values are eligible for mass assignment
	protected $fillable = ['status'];

	// Sets up the relationship between Spot and Employee
	public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    // Toggles spot status between available and taken and updates database
    public function toggleSpotStatus()
    {
        if ($this->status == 'available') {
            $this->update(['status' => 'taken']);
        } elseif ($this->status == 'taken') {
            $this->update(['status' => 'available']);
        }
    }

}