<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::truncate();

        Type::create([
            'name' => 'Cereali e derivati',
        ]);

        Type::create([
            'name' => 'Carne',
        ]);

        Type::create([
            'name' => 'Pesce',
        ]);

        Type::create([
            'name' => 'Uova',
        ]);

        Type::create([
            'name' => 'Legumi',
        ]);

        Type::create([
            'name' => 'Verdura',
        ]);

        Type::create([
            'name' => 'Frutta',
        ]);

        Type::create([
            'name' => 'Latte e derivati',
        ]);

        Type::create([
            'name' => 'Bevande',
        ]);

    }
}
