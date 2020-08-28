<?php

use Illuminate\Database\Seeder;

use App\Nakama;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Nakama::insert([
            [
                'name' => 'Aufal Marom',
                'job_role' => 'Software Engineer',
                'phone_number' => '6285234567890',
                'work_location' => 'Plaza Mandiri',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Satia Maulidin',
                'job_role' => 'Software Engineer',
                'phone_number' => '6285278903456',
                'work_location' => 'Plaza Mandiri',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adie Heryadi',
                'job_role' => 'Technical Analyst',
                'phone_number' => '6285243213456',
                'work_location' => 'Plaza Mandiri',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eddy Lee',
                'job_role' => 'Solution Analyst',
                'phone_number' => '6285212345456',
                'work_location' => 'Plaza Mandiri',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Herryanto',
                'job_role' => 'User',
                'phone_number' => '6285234904321',
                'work_location' => 'Menara Mandiri',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Juni',
                'job_role' => 'Tester',
                'phone_number' => '6285234901234',
                'work_location' => 'Menara Mandiri',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
