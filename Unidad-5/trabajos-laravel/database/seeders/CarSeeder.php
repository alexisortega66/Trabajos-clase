<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = new Car();

        $car->name = "Audi";
        $car->descripcion = "Carro muy rapido";
        $car->modelo = "MVW";
        $car->año = 2000;

        $car -> save();

        $car = new Car();

        $car->name = "Buggati";
        $car->descripcion = "Carro muy rapido";
        $car->modelo = "Ferrari";
        $car->año = 2010;

        $car -> save();



    }
}
