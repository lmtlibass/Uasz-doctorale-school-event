<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::truncate();
        
        Role::create([
            'name' => 'Admin',
        ]);
        Role::create([
            'name' => 'User',
        ]);
        Role::create([
            'name' => 'Responsable',
        ]);

       
    }
}