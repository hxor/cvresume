<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
    	'firstname', 'lastname', 'gender', 'birthdate',
    	'add_street', 'add_city', 'add_stat', 'add_postcode', 'add_country',
    	'title', 'email', 'phone', 'description', 'interest', 'photo'
    ];
}
