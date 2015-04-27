<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model {

    // Database table
    protected $table = 'spots';

    // These attributes are eligible for mass assignment
	protected $fillable = ['status'];

	// Sets up the relationship between Spot and Employee
	public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}