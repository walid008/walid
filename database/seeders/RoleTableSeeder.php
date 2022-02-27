<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            
            'role' => 'Partculier',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Societe',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Web-master',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Utilisateur',
            
        ]);


    }
}
