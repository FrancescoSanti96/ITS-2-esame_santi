<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aliment;

class AlimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aliment::truncate();

        Aliment::create([
            'name' => 'Spaghetti',
            'type_id' => 1 ,
            'brand'=> 'Barilla',
            'number'=> 3,
            'location_id'=> 2,
            'expiryDate'=>'2022-12-09',
        ]);

        Aliment::create([
            'name' => 'Fusilli',
            'type_id' => 1 ,
            'brand'=> 'Iper',
            'number'=> 2,
            'location_id'=> 3,
            'expiryDate'=>'2022-9-09',
        ]);

        Aliment::create([
            'name' => 'Mortadella',
            'type_id' => 2 ,
            'brand'=> 'Coop',
            'number'=> 1,
            'location_id'=> 1,
            'expiryDate'=>'2021-12-09',
        ]);

        Aliment::create([
            'name' => 'Vino',
            'type_id' => 9 ,
            'brand'=> 'Coop',
            'number'=> 1,
            'location_id'=> 3,
        ]);

        Aliment::create([
            'name' => 'Birra',
            'type_id' => 9 ,
            'brand'=> 'Moretti',
            'number'=> 1,
            'location_id'=> 2,
            'expiryDate'=>'2023-2-25',
        ]);
    }
}
