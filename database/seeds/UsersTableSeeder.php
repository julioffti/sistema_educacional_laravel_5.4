<?php

use Illuminate\Database\Seeder;
use CONDER\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CONDER\Models\User::class)->create([
            'email' => 'admin@user.com',
            'enrolment' => 100001,
            'password' => bcrypt('trinity')
        ])->each(function(User $user){
            User::assignRole($user, User::ROLE_ADMIN);
            $user->save();
        });

    }
}
