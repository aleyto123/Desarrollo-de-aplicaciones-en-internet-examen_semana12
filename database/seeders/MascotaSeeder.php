<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mascotas')->insert([
            ['nombre' => 'Luna', 'tipo' => 'Perro', 'edad' => 3, 'raza' => 'Labrador', 'peso' => 25.4, 'fecha_adopcion' => '2022-05-10'],
            ['nombre' => 'Milo', 'tipo' => 'Gato', 'edad' => 2, 'raza' => 'Siames', 'peso' => 4.5, 'fecha_adopcion' => '2023-01-12'],
            ['nombre' => 'Rocky', 'tipo' => 'Perro', 'edad' => 1, 'raza' => 'Bulldog', 'peso' => 20.0, 'fecha_adopcion' => '2024-03-18'],
            ['nombre' => 'Kira', 'tipo' => 'Gato', 'edad' => 4, 'raza' => 'Persa', 'peso' => 3.2, 'fecha_adopcion' => '2021-06-25'],
            ['nombre' => 'Toby', 'tipo' => 'Perro', 'edad' => 5, 'raza' => 'Beagle', 'peso' => 18.3, 'fecha_adopcion' => '2020-09-11'],
            ['nombre' => 'Lola', 'tipo' => 'Pájaro', 'edad' => 1, 'raza' => 'Canario', 'peso' => 0.2, 'fecha_adopcion' => '2023-12-01'],
            ['nombre' => 'Max', 'tipo' => 'Perro', 'edad' => 2, 'raza' => 'Golden Retriever', 'peso' => 30.0, 'fecha_adopcion' => '2023-04-10'],
            ['nombre' => 'Nina', 'tipo' => 'Gato', 'edad' => 3, 'raza' => 'Angora', 'peso' => 4.1, 'fecha_adopcion' => '2022-07-20'],
            ['nombre' => 'Simba', 'tipo' => 'Pájaro', 'edad' => 2, 'raza' => 'Periquito', 'peso' => 0.3, 'fecha_adopcion' => '2021-10-15'],
            ['nombre' => 'Bruno', 'tipo' => 'Perro', 'edad' => 6, 'raza' => 'Boxer', 'peso' => 28.7, 'fecha_adopcion' => '2019-02-22'],
            ['nombre' => 'Maya', 'tipo' => 'Gato', 'edad' => 5, 'raza' => 'Maine Coon', 'peso' => 6.0, 'fecha_adopcion' => '2020-08-13'],
            ['nombre' => 'Thor', 'tipo' => 'Perro', 'edad' => 1, 'raza' => 'Chihuahua', 'peso' => 2.8, 'fecha_adopcion' => '2024-05-03'],
            ['nombre' => 'Coco', 'tipo' => 'Pájaro', 'edad' => 3, 'raza' => 'Loro', 'peso' => 1.5, 'fecha_adopcion' => '2022-03-05'],
            ['nombre' => 'Bella', 'tipo' => 'Perro', 'edad' => 4, 'raza' => 'Dálmata', 'peso' => 22.0, 'fecha_adopcion' => '2021-01-17'],
            ['nombre' => 'Tom', 'tipo' => 'Gato', 'edad' => 6, 'raza' => 'Europeo', 'peso' => 5.5, 'fecha_adopcion' => '2019-06-30'],
        ]);
    }
}
