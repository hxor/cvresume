<?php

use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [
        	[
        		'title' => 'Komunitas Linux Cirebon',
        		'name' => 'Anggota KINCIR',
        		'time' => '2012 - present',
        		'content' => 'Diluar aktifitas pendidikan formal, saya memiliki rekan-rekan dan tergabung dalam sebuah komunitas yang ada di Cirebon dengan konsentrasi pengguna sistem operasi Linux. Saat itu juga saya memiliki pengalaman dalam mengoprasikannya',
        	],
        	[
        		'title' => 'JINGGA Media',
        		'name' => 'Staff TI Jingga Media',
        		'time' => '2013 - present',
        		'content' => 'JINGGA MEDIA merupakan sebuah lembaga nirlaba yang bergerak dalam bidang analisis data dan pengembangan media komunitas. Semenjak berdirinya -yakni pada tanggal 20 Nopember 2012- lembaga ini memiliki tujuan untuk melakukan kerja-kerja penguatan komunitas, terutama melalui strategi pengembangan media dan jaringan informasi.',
        	],
        	[
        		'title' => 'WeeeWork!',
        		'name' => 'Anggota WeeeWork',
        		'time' => '2015 - present',
        		'content' => 'Bersama rekan-rekan seperjuangan dan satu pleton :D, kami beranggotakan 5 orang saat ini tergabung untuk menjadi sebuah Tim untuk bisa memberikan pelayanan dan solusi untuk kebutuhan di bidang TI. Dengan memiliki kemampuan masing-masing setiap anggotanya. Mulai dari Software Engineer, Networking, Web & Mobile Dev',
        	],
        	[
        		'title' => 'Laperan.com',
        		'name' => 'Junior Web Dev',
        		'time' => '2016 - present',
        		'content' => 'Saya diberi kesempatan untuk bergabung dengan salah satu tim developer di Cirebon untuk membangun sebuah sistem delivery order makanan bernamakan Laperan.com. Di sini saya menjadi anggota junior dengan tugas membangun sistem API untuk aplikasi mobile agar bisa berhubungan dengan sistem yang ada di server menggunakan Framework PHP Laravel',
        	],
        ];

        DB::table('experiences')->insert($experiences);
    }
}
