<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role_author = new Role();
        $role_author->name = 'Moderator';
        $role_author->save();
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->save();
    }
}
