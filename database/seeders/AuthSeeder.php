<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);

        $user = User::find(1);
        $user->assigRole('admin');
        $user->givePermissionTo('edit articles');

    }
}
