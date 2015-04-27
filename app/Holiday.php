<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model {

    // These attributes are eligible for mass assignment
	protected $fillable = ['holiday'];

}
