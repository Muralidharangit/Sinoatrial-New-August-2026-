<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Clear cached permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permission if it doesn't exist
        $permission = Permission::firstOrCreate(['name' => 'testimonialmanagement']);

        // Assign to Super Admin role if exists
        $superAdmin = Role::where('name', 'Super Admin')->first();
        if ($superAdmin) {
            $superAdmin->givePermissionTo($permission);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Clear cached permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permission = Permission::where('name', 'testimonialmanagement')->first();
        if ($permission) {
            $superAdmin = Role::where('name', 'Super Admin')->first();
            if ($superAdmin) {
                $superAdmin->revokePermissionTo($permission);
            }
            $permission->delete();
        }
    }
};
