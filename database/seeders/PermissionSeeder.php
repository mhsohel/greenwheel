<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dashboard
        $moduleAppDashboard = Module::updateOrCreate(['name' => 'Admin Dashboard']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppDashboard->id,
            'name' => 'Access Dashboard',
            'slug' => 'access_dashboard',
        ]);



        // Profile
        $moduleAppProfile = Module::updateOrCreate(['name' => 'Profile']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppProfile->id,
            'name' => 'Profile Setting',
            'slug' => 'access_profile',
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppProfile->id,
            'name' => 'Update Profile',
            'slug' => 'update_profile',
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppProfile->id,
            'name' => 'Update Password',
            'slug' => 'update_password',
        ]);


        //Generel Settings
        $moduleAppBackups = Module::updateOrCreate(['name' => 'Geneneral Settings']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBackups->id,
            'name' => 'Access General Settings',
            'slug' => 'access_settings',
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppBackups->id,
            'name' => 'Update General Settings',
            'slug' => 'update_settings',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBackups->id,
            'name' => 'General Site logo Backups',
            'slug' => 'logo_update',
        ]);




        // Role management
        $moduleAppRole = Module::updateOrCreate(['name' => 'Role Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Access Roles',
            'slug' => 'access_roles',
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Create Role',
            'slug' => 'create_roles',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Edit Role',
            'slug' => 'edit_roles',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Delete Role',
            'slug' => 'delete_roles',
        ]);

        // User management
        $moduleAppUser = Module::updateOrCreate(['name' => 'User Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Access Users',
            'slug' => 'access_users',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Create User',
            'slug' => 'create_users',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Edit User',
            'slug' => 'edit_users',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Delete User',
            'slug' => 'delete_users',
        ]);





        // Module management
        $moduleAppMenu = Module::updateOrCreate(['name' => 'Module Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Module Access',
            'slug' => 'access_modules',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Create Module',
            'slug' => 'create_modules',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Edit module',
            'slug' => 'edit_modules',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Delete module',
            'slug' => 'delete_modules',
        ]);

        // Permission management
        $moduleAppMenu = Module::updateOrCreate(['name' => 'Permission Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'permission Access',
            'slug' => 'access_permissions',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Create permission',
            'slug' => 'create_permissions',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Edit permission',
            'slug' => 'edit_permissions',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Delete permission',
            'slug' => 'delete_permissions',
        ]);

    }
}
