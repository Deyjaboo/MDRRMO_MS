<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'user',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
     
            'name'=> 'Admin',
            'address'=> 'Admin',
            'contact_num'=> '0912345691',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('secret'),
            'role' => 'admin',
            'Status'=> 'Active',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
