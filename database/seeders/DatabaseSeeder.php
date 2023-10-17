<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Curso::factory(100)->create(); //Llama a la clase Curso y ejecuta el método factory, indicando que genere 100 elementos y luego pasa el metodo create
        User::factory(10)->create();
    }
}
