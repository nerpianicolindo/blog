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
        $admin = new User;
        $admin->name = "alvaro";
        $admin->email = "alvaro@gmail.com";
        $admin->password = bcrypt("123456");
        $admin->save();

        $users = factory(User::class, 4)->create();
    }
}
