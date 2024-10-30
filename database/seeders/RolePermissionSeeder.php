<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Membuat beberapa role
        //Membuat default user untuk super admin

        $ownerRole = Role::create([
            'name' => 'owner',
        ]);

        $studentRole = Role::create([
            'name' => 'student',
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher',
        ]);

        //Super admin
        $userOwner = User::create([
            'name' => 'Vicky Leonardo',
            'occupation' => 'Educator',
            'avatar' => 'images/default-avatar.png',
            'email' => 'vicky@example.com',
            'password' => bcrypt('123'),
        ]);

        $userOwner->assignRole($ownerRole);

    }
}
