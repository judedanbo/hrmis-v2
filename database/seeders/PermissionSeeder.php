<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // User Permissions
        Permission::create(['name' => 'view all users']);
        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'restore user']);
        Permission::create(['name' => 'destroy user']);

        // Role Permissions
        Permission::create(['name' => 'view all roles']);
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);
        Permission::create(['name' => 'restore role']);
        Permission::create(['name' => 'destroy role']);

        // Permissions Permissions
        Permission::create(['name' => 'view all permissions']);
        Permission::create(['name' => 'view permission']);
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);
        Permission::create(['name' => 'restore permission']);
        Permission::create(['name' => 'destroy permission']);

        // Address Permissions
        Permission::create(['name' => 'view all addresses']);
        Permission::create(['name' => 'view address']);
        Permission::create(['name' => 'create address']);
        Permission::create(['name' => 'update address']);
        Permission::create(['name' => 'delete address']);
        Permission::create(['name' => 'restore address']);
        Permission::create(['name' => 'destroy address']);

        // Capital Permissions
        Permission::create(['name' => 'view all capitals']);
        Permission::create(['name' => 'view capital']);
        Permission::create(['name' => 'create capital']);
        Permission::create(['name' => 'update capital']);
        Permission::create(['name' => 'delete capital']);
        Permission::create(['name' => 'restore capital']);
        Permission::create(['name' => 'destroy capital']);

        // Company Permissions
        Permission::create(['name' => 'view all companies']);
        Permission::create(['name' => 'view company']);
        Permission::create(['name' => 'create company']);
        Permission::create(['name' => 'update company']);
        Permission::create(['name' => 'delete company']);
        Permission::create(['name' => 'restore company']);
        Permission::create(['name' => 'destroy company']);

        // Staff Permissions
        Permission::create(['name' => 'view all staff']);
        Permission::create(['name' => 'view staff']);
        Permission::create(['name' => 'create staff']);
        Permission::create(['name' => 'update staff']);
        Permission::create(['name' => 'delete staff']);
        Permission::create(['name' => 'restore staff']);
        Permission::create(['name' => 'destroy staff']);

        // staff Type Permission
        Permission::create(['name' => 'view all staff types']);
        Permission::create(['name' => 'view staff type']);
        Permission::create(['name' => 'create staff type']);
        Permission::create(['name' => 'update staff type']);
        Permission::create(['name' => 'delete staff type']);
        Permission::create(['name' => 'restore staff type']);
        Permission::create(['name' => 'destroy staff type']);

        // Staff Progress prermission
        Permission::create(['name' => 'view all staff progress']);
        Permission::create(['name' => 'view staff progress']);
        Permission::create(['name' => 'create staff progress']);
        Permission::create(['name' => 'update staff progress']);
        Permission::create(['name' => 'delete staff progress']);
        Permission::create(['name' => 'restore staff progress']);
        Permission::create(['name' => 'destroy staff progress']);

        // Staff Progress transfer
        Permission::create(['name' => 'view all staff transfers']);
        Permission::create(['name' => 'view staff transfer']);
        Permission::create(['name' => 'create staff transfer']);
        Permission::create(['name' => 'update staff transfer']);
        Permission::create(['name' => 'delete staff transfer']);
        Permission::create(['name' => 'restore staff transfer']);
        Permission::create(['name' => 'destroy staff transfer']);

        // Document Permissions
        Permission::create(['name' => 'view all documents']);
        Permission::create(['name' => 'view document']);
        Permission::create(['name' => 'create document']);
        Permission::create(['name' => 'update document']);
        Permission::create(['name' => 'delete document']);
        Permission::create(['name' => 'restore document']);
        Permission::create(['name' => 'destroy document']);

        // Note Permissions
        Permission::create(['name' => 'view all notes']);
        Permission::create(['name' => 'view note']);
        Permission::create(['name' => 'create note']);
        Permission::create(['name' => 'update note']);
        Permission::create(['name' => 'delete note']);
        Permission::create(['name' => 'restore note']);
        Permission::create(['name' => 'destroy note']);

        // Person Permissions
        Permission::create(['name' => 'view all people']);
        Permission::create(['name' => 'view person']);
        Permission::create(['name' => 'create person']);
        Permission::create(['name' => 'update person']);
        Permission::create(['name' => 'delete person']);
        Permission::create(['name' => 'restore person']);
        Permission::create(['name' => 'destroy person']);

        // contact Permissions
        Permission::create(['name' => 'view all contacts']);
        Permission::create(['name' => 'view contact']);
        Permission::create(['name' => 'create contact']);
        Permission::create(['name' => 'update contact']);
        Permission::create(['name' => 'delete contact']);
        Permission::create(['name' => 'restore contact']);
        Permission::create(['name' => 'destroy contact']);

        // dependent Permissions
        Permission::create(['name' => 'view all dependents']);
        Permission::create(['name' => 'view dependent']);
        Permission::create(['name' => 'create dependent']);
        Permission::create(['name' => 'update dependent']);
        Permission::create(['name' => 'delete dependent']);
        Permission::create(['name' => 'restore dependent']);
        Permission::create(['name' => 'destroy dependent']);

        // district Permissions
        Permission::create(['name' => 'view all districts']);
        Permission::create(['name' => 'view district']);
        Permission::create(['name' => 'create district']);
        Permission::create(['name' => 'update district']);
        Permission::create(['name' => 'delete district']);
        Permission::create(['name' => 'restore district']);
        Permission::create(['name' => 'destroy district']);

        // region Permissions
        Permission::create(['name' => 'view all regions']);
        Permission::create(['name' => 'view region']);
        Permission::create(['name' => 'create region']);
        Permission::create(['name' => 'update region']);
        Permission::create(['name' => 'delete region']);
        Permission::create(['name' => 'restore region']);
        Permission::create(['name' => 'destroy region']);

        // // region Permissions
        // Permission::create(['name' => 'view all regions']);
        // Permission::create(['name' => 'view region']);
        // Permission::create(['name' => 'create region']);
        // Permission::create(['name' => 'update region']);
        // Permission::create(['name' => 'delete region']);
        // Permission::create(['name' => 'restore region']);
        // Permission::create(['name' => 'destroy region']);

        // Unit Permissions
        Permission::create(['name' => 'view all units']);
        Permission::create(['name' => 'view unit']);
        Permission::create(['name' => 'create unit']);
        Permission::create(['name' => 'update unit']);
        Permission::create(['name' => 'delete unit']);
        Permission::create(['name' => 'restore unit']);
        Permission::create(['name' => 'destroy unit']);

        // position Permissions
        Permission::create(['name' => 'view all positions']);
        Permission::create(['name' => 'view position']);
        Permission::create(['name' => 'create position']);
        Permission::create(['name' => 'update position']);
        Permission::create(['name' => 'delete position']);
        Permission::create(['name' => 'restore position']);
        Permission::create(['name' => 'destroy position']);

        // qualification Permissions
        Permission::create(['name' => 'view all qualifications']);
        Permission::create(['name' => 'view qualification']);
        Permission::create(['name' => 'create qualification']);
        Permission::create(['name' => 'update qualification']);
        Permission::create(['name' => 'delete qualification']);
        Permission::create(['name' => 'restore qualification']);
        Permission::create(['name' => 'destroy qualification']);

        // rank Permissions
        Permission::create(['name' => 'view all ranks']);
        Permission::create(['name' => 'view rank']);
        Permission::create(['name' => 'create rank']);
        Permission::create(['name' => 'update rank']);
        Permission::create(['name' => 'delete rank']);
        Permission::create(['name' => 'restore rank']);
        Permission::create(['name' => 'destroy rank']);

        // rank category Permissions
        Permission::create(['name' => 'view all rank categories']);
        Permission::create(['name' => 'view rank category']);
        Permission::create(['name' => 'create rank category']);
        Permission::create(['name' => 'update rank category']);
        Permission::create(['name' => 'delete rank category']);
        Permission::create(['name' => 'restore rank category']);
        Permission::create(['name' => 'destroy rank category']);

        // identity Permissions

        Permission::create(['name' => 'view all identities']);
        Permission::create(['name' => 'view identity']);
        Permission::create(['name' => 'create identity']);
        Permission::create(['name' => 'update identity']);
        Permission::create(['name' => 'delete identity']);
        Permission::create(['name' => 'restore identity']);
        Permission::create(['name' => 'destroy identity']);

        // job description Permissions

        Permission::create(['name' => 'view all job descriptions']);
        Permission::create(['name' => 'view job description']);
        Permission::create(['name' => 'create job description']);
        Permission::create(['name' => 'update job description']);
        Permission::create(['name' => 'delete job description']);
        Permission::create(['name' => 'restore job description']);
        Permission::create(['name' => 'destroy job description']);

        // job profile Permissions

        Permission::create(['name' => 'view all job profiles']);
        Permission::create(['name' => 'view job profile']);
        Permission::create(['name' => 'create job profile']);
        Permission::create(['name' => 'update job profile']);
        Permission::create(['name' => 'delete job profile']);
        Permission::create(['name' => 'restore job profile']);
        Permission::create(['name' => 'destroy job profile']);

        // staff status Permissions

        Permission::create(['name' => 'view all staff statuses']);
        Permission::create(['name' => 'view staff status']);
        Permission::create(['name' => 'create staff status']);
        Permission::create(['name' => 'update staff status']);
        Permission::create(['name' => 'delete staff status']);
        Permission::create(['name' => 'restore staff status']);
        Permission::create(['name' => 'destroy staff status']);

        //

    }
}
