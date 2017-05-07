<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Person::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name_first' => 'Marco',
            'name_last' => 'Aurelio Stumpf Gonzalez',
            'city' => 'Novo Hamburgo',
            'country' => 'Brazil',
            'org' => 'UNISINOS',
        ]);
        
        Person::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name_first' => 'Catalini',
            'name_last' => 'Molinatti',
            'city' => 'Córdoba',
            'country' => 'Argentina', 
        ]);
        
        
        Person::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name_first' => 'Maria Cristina',
            'name_last' => 'Rojas Eberhard',
            'city' => 'Bogota',
            'country' => 'Colombia',
        ]);
        
        Person::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name_first' => 'Everton',
            'name_last' => 'da Silva',
            'city' => 'Florianópolis',
            'country' => 'Brazil',
            'org' => 'Universidade Federal de Santa Catarina'
        ]);
        
        Person::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name_first' => 'Sara',
            'name_last' => 'García Jiménez',
            'city' => 'Mexico City',
            'country' => 'Mexico',
            'org' => 'Universidad Nacional Autónoma de México'
        ]);
        
        
    }
}
