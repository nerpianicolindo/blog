<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'Admin']);
        $writeRole = Role::create(['name' => 'Writer']);

        $admin = new User;
        $admin->name = "alvaro";
        $admin->email = "alvaro@gmail.com";
        $admin->password = bcrypt("123456");
        $admin->save();
        $admin->assignRole($adminRole);

        $writer = new User;
        $writer->name = "batnu";
        $writer->email = "batnusan@gmail.com";
        $writer->password = bcrypt("123456");
        $writer->save();
        $writer->assignRole($writeRole);

        $admin = new User;
        $admin->name = "Pepe";
        $admin->email = "pepe@email.es";
        $admin->password = bcrypt("123456");
        $admin->save();

        $users = factory(User::class, 8)->make();

        $users->each(function ($u) use($writeRole){
            $u->save();
            $u->assignRole($writeRole);
        });
    }
}
