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
        $userRole = Role::create(['name' => 'User']);

        $dashboardAccessPermission = Permission::create(['name' => 'Dashboard access']);

        $wiewPostPermission = Permission::create(['name' => 'View posts']);
        $createPostPermission = Permission::create(['name' => 'Create posts']);
        $updatePostPermission = Permission::create(['name' => 'Update posts']);
        $deletePostPermission = Permission::create(['name' => 'Delete posts']);

        $wiewUserPermission = Permission::create(['name' => 'View users']);
        $createUserPermission = Permission::create(['name' => 'Create users']);
        $updateUserPermission = Permission::create(['name' => 'Update users']);
        $deleteUserPermission = Permission::create(['name' => 'Delete users']);

        $writeRole->givePermissionTo($dashboardAccessPermission);
        $adminRole->givePermissionTo($dashboardAccessPermission);

        $admin = new User;
        $admin->name = "alvaro";
        $admin->age = 25;
        $admin->email = "alvaro@gmail.com";
        $admin->password = "123456";
        $admin->save();
        $admin->assignRole($adminRole);
        $admin->assignRole($writeRole);

        $writer = new User;
        $writer->name = "batnu";
        $writer->age = 26;
        $writer->email = "batnusan@gmail.com";
        $writer->password = "123456";
        $writer->save();
        $writer->assignRole($writeRole);

        $writer = new User;
        $writer->name = "ivan";
        $writer->age = 23;
        $writer->email = "ivan@gmail.com";
        $writer->password = "123456";
        $writer->save();
        $writer->assignRole($userRole);


        $admin = new User;
        $admin->name = "Pepe";
        $admin->age = 25;
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
