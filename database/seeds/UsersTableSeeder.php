<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'alvaro';
        $user->email = 'alvaro@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();

        $users = factory(User::class, 4)->create();
    }
}
