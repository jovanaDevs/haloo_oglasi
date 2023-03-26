<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Oglas;
use App\Models\TipVozila;
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
    {   TipVozila::truncate();
        User::truncate();
        User::factory(5)->create();
        
        TipVozila::create(['naziv_tipa'=>'limuzina']);
        TipVozila::create(['naziv_tipa'=>'hecbek']);
        TipVozila::create(['naziv_tipa'=>'karavan']);
        TipVozila::create(['naziv_tipa'=>'kabriolet']);
        TipVozila::create(['naziv_tipa'=>'SUV']);
        TipVozila::create(['naziv_tipa'=>'pickup']);
        TipVozila::create(['naziv_tipa'=>'kombi']);
        TipVozila::create(['naziv_tipa'=>'kamion']);
        Oglas::factory(8)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
