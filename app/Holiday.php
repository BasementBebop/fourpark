<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model {

    // These values are eligible for mass assignment
	protected $fillable = ['holiday'];

}
