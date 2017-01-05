<?php

use Illuminate\Database\Seeder;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = [
        	[
        		'icon' => '',
        		'title' => 'Madrasah Ibtidaiyah',
        		'name' => 'MI Wathoniyah Putra',
        		'time' => '2001 - 2007',
        		'content' => 'Hai, saya lulus pada sekolah dasar di salah satu madrasah di kampung halaman saya dan lulus dengan baik.',
        	],
        	[
        		'icon' => '',
        		'title' => 'Madrasah Tsanawiyah',
        		'name' => 'MTs.Agama Islam Mertapada',
        		'time' => '2007 - 2010',
        		'content' => 'Pada tingkat menengah pertama, saya melanjutkan pendidikan di MTs.AI yang masih satu yayasan dengan sekolah dasarku. Saya masih diberikan lulus dengan baik',
        	],
        	[
        		'icon' => '',
        		'title' => 'Madrasah Aliyah',
        		'name' => 'MA.Agama Islam Mertapada',
        		'time' => '2010 - 2013',
        		'content' => 'Kemudian melanjutkan di tingkat Sekolah Menengah Akhir yang masih dalam sekitaran Pondok Pesantren Attarbiyatul Wathoniyah. Yakni, MA.Agama Islam Mertapada. Pada tingkat ini, bersyukur masih diberi masuk peringkat 10 besar lulusan terbaik.',
        	],
        	[
        		'icon' => 'fa-graduation-cap',
        		'title' => 'Sekolah Tinggi Manajemen Informatika dan Komputer',
        		'name' => 'STMIK CIC Cirebon',
        		'time' => '2013 - 2017',
        		'content' => 'Meski saat ini saya belum lulus dari bangku kuliah, tapi semoga tepat waktu dengan yang saya cantumkan :D. Saat ini saya tengah menjadi mahasiswa perguruan tinggi di Cirebon dengan program studi teknik informatika. Bersyukur, saya menjalani kuliah ini dengan beasiswa selama S1',
        	],
        ];

        DB::table('education')->insert($education);
    }
}
