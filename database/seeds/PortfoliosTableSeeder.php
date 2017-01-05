<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'title' => 'iFosys', 
    			'category' => 'School Information System', 
    			'content' => 'Project sakit hati', 
    			'image' => '',
    		],[
    			'title' => 'JINGGA Media', 
    			'category' => 'Website', 
    			'content' => 'Website resmi JINGGA Media', 
    			'image' => ''
    		],[
    			'title' => 'Smart Management Service', 
    			'category' => 'Information System', 
    			'content' => 'Sianjeng ini belum lunas bayar', 
    			'image' => ''
    		],
    	];
        DB::table('portfolios')->insert($data);
    }
}
