<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array([
            'name' => 'ADMIN ARTICLE',
            'created_at' => NOW(),
            'created_by' => 'SUPERADMIN',
            'updated_at' => NULL,
            'updated_by' => 'SUPERADMIN'
        ], [
            'name' => 'ADMIN BUILDING',
            'created_at' => NOW(),
            'created_by' => 'SUPERADMIN',
            'updated_at' => NULL,
            'updated_by' => 'SUPERADMIN'
        ], [
            'name' => 'ADMIN FINANCE',
            'created_at' => NOW(),
            'created_by' => 'SUPERADMIN',
            'updated_at' => NULL,
            'updated_by' => 'SUPERADMIN'
        ], [
            'name' => 'SUPERADMIN',
            'created_at' => NOW(),
            'created_by' => 'SUPERADMIN',
            'updated_at' => NULL,
            'updated_by' => 'SUPERADMIN'
        ]));
    }
}
