<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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

        $wiewPostPermission = Permission::create(['name' => 'View posts']);
        $createPostPermission = Permission::create(['name' => 'Create posts']);
        $updatePostPermission = Permission::create(['name' => 'Update posts']);
        $deletePostPermission = Permission::create(['name' => 'Delete posts']);

        $wiewUserPermission = Permission::create(['name' => 'View users']);
        $createUserPermission = Permission::create(['name' => 'Create users']);
        $updateUserPermission = Permission::create(['name' => 'Update users']);
        $deleteUserPermission = Permission::create(['name' => 'Delete users']);

        $admin = new User;
        $admin->name = "alvaro";
        $admin->email = "alvaro@gmail.com";
        $admin->password = "123456";
        $admin->save();
        $admin->assignRole($adminRole);
        $admin->assignRole($writeRole);

        $writer = new User;
        $writer->name = "batnu";
        $writer->email = "batnusan@gmail.com";
        $writer->password = "123456";
        $writer->save();
        $writer->assignRole($writeRole);

        $admin = new User;
        $admin->name = "Pepe";
        $admin->email = "pepe@email.es";
        $admin->password = "123456";
        $admin->save();
        $admin->assignRole($writeRole);

        $users = factory(User::class, 8)->make();

        $users->each(function ($u) use($writeRole){
            $u->save();
            $u->assignRole($writeRole);
        });
    }
}
