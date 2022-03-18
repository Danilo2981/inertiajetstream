<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        
        $this->call(CountrySeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(ContactSeeder::class);      
        
        User::factory()->create([
            'name' => 'Danilo Vega',
            'email' => 'danilo.vega.lopez@gmail.com',
            'password' => bcrypt('123456'),
        ]);

    }
}
