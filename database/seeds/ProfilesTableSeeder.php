<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = App\Models\Profile::create([
	    	'firstname' => 'Ahmad', 
	    	'lastname' => 'Hakim', 
	    	'gender' => 'm', 
	    	'birthdate' => '1994-08-16',
	    	'add_street' => 'Maja 2, Sidamulya, Rt/Rw 01/02',
	    	'add_city' => 'Cirebon Kab', 
	    	'add_stat' => 'Jawa Barat', 
	    	'add_postcode' => '45181', 
	    	'add_country' => 'Indonesia',
	    	'title' => 'Web Developer & Network Engineer', 
	    	'email' => 'ahmadhakim404@gmail.com', 
	    	'phone' => '+62 899 6568 953', 
	    	'description' => 'Hello! I’m Ahmad Hakim. Senior Web Developer with over 13 years of experience specializing in front end development. Experienced with all stages of the development cycle for dynamic web projects.Having an in-depth knowledge including advanced HTML5, CSS, CSS3, SASS, LESS, JSON, XML, Java, JavaScript, JQuery, Angular JS. Strong background in management and leadership.', 
	    	'interest' => 'First of all I love music, country music is my favorite. Love watching football, movies and playing games with my buddies. I spend quite a lot of time in traveling and photography, these keeps me fresh for working environment. I also spend time volunteering at the Red Cross in London, UK each month.',
	    	'photo' => NULL
	    ]);
    }
}
