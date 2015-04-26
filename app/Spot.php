<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model {

    protected $table = 'spots';

	// Sets up the relationship between Spot and Employee
	public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}