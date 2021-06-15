<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name' =>'Blogger']);

        Permission::create(['name'=>'admin.tags.index'])->syncRoles([$role1,$role2]);//para relacionar ese permiso con los roles que hay 
        Permission::create(['name'=>'admin.tags.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.tags.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.tags.show'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.tags.delete'])->syncRoles([$role1,$role2]);
        

        

    }
}
