<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Societe;
use App\Models\Trajet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
     
         Trajet::factory(1)->create();
        Societe::factory(1)->create();
        $this->call(RoleTableSeeder::class);
    
        
    }
}
