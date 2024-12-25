<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $editorRole = Role::firstOrCreate(['name' => 'editor']);

        // Create permissions
        $viewDashboardPermission = Permission::firstOrCreate(['name' => 'view dashboard']);
        $editArticlesPermission = Permission::firstOrCreate(['name' => 'edit articles']);

        // Assign permissions to roles
        $adminRole->syncPermissions(Permission::all());
        $editorRole->syncPermissions([$viewDashboardPermission, $editArticlesPermission]);

        // Create users
        $adminUser = User::firstOrCreate(
            ['email' => 'ouma@gmail.com'],
            [
                'name' => 'Admin Ouma',
                'password' => Hash::make('ouma1234'),
            ]
        );

        $editorUser = User::firstOrCreate(
            ['email' => 'test5@gmail.com'],
            [
                'name' => 'Editor Test5',
                'password' => Hash::make('test5678'),
            ]
        );

        // Assign roles to users
        if (!$adminUser->hasRole('admin')) {
            $adminUser->assignRole('admin');
        }

        if (!$editorUser->hasRole('editor')) {
            $editorUser->assignRole('editor');
        }

        echo "Roles and permissions have been seeded, and users have been created and assigned roles.\n";
    }
}
