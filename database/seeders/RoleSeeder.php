<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Editor']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.noticias.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.noticias.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.noticias.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.noticias.destroy'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name' => 'admin.services.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.services.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.services.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.services.destroy'])->syncRoles([$role1]);

    }
}
