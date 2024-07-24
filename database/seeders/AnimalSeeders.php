<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;
use Faker\Generator as Faker;
class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        for ($i=0; $i < 30; $i++) {
            $animals = new Animal();
            $animals ->nome = $faker->unique()->word();
            $animals ->specie = $faker->word();
            $animals ->longevità = $faker->numberBetween(1, 1000);
            $animals ->alimentazione = $faker->word();
            $animals ->habitat = $faker->word();
            $animals ->longevità = $faker->numberBetween(1, 1000);
            $animals ->rischio_estinzione = $faker->boolean();
            $animals ->regione = $faker->country();
            $animals ->save();
        }
    }
}
