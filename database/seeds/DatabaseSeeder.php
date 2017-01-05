<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(EducationsTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
    }
}
