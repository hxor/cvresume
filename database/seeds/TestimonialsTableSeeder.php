<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
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
    			'name' => 'Ahmad Rofahan',
    			'title' => 'Direktur Program',
    			'inst' => 'JINGGA Media',
    			'photo' => '',
    			'content' => 'Pengalaman menjadi salah satu kilen dari Ahmad Hakim cukup memuaskan. Service yang diberikan sangat cepat dan hasilnya juga sesuai dengan keinginan. Selain itu, proses komunikasi dengan klien juga berjalan dengan baik, sehingga hasil produknya juga sesuai dengan yang diharapkan.'
    		],[
    			'name' => 'Ahmad Rofahan',
    			'title' => 'Direktur Program',
    			'inst' => 'JINGGA Media',
    			'photo' => '',
    			'content' => 'Pengalaman menjadi salah satu kilen dari Ahmad Hakim cukup memuaskan. Service yang diberikan sangat cepat dan hasilnya juga sesuai dengan keinginan. Selain itu, proses komunikasi dengan klien juga berjalan dengan baik, sehingga hasil produknya juga sesuai dengan yang diharapkan.'
    		],[
    			'name' => 'Ahmad Rofahan',
    			'title' => 'Direktur Program',
    			'inst' => 'JINGGA Media',
    			'photo' => '',
    			'content' => 'Pengalaman menjadi salah satu kilen dari Ahmad Hakim cukup memuaskan. Service yang diberikan sangat cepat dan hasilnya juga sesuai dengan keinginan. Selain itu, proses komunikasi dengan klien juga berjalan dengan baik, sehingga hasil produknya juga sesuai dengan yang diharapkan.'
    		],[
                'name' => 'Ahmad Rofahan',
                'title' => 'Direktur Program',
                'inst' => 'JINGGA Media',
                'photo' => '',
                'content' => 'Pengalaman menjadi salah satu kilen dari Ahmad Hakim cukup memuaskan. Service yang diberikan sangat cepat dan hasilnya juga sesuai dengan keinginan. Selain itu, proses komunikasi dengan klien juga berjalan dengan baik, sehingga hasil produknya juga sesuai dengan yang diharapkan.'
            ]
    	];
        DB::table('testimonials')->insert($data);
    }
}
