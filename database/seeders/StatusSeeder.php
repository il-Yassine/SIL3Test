<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Actif, Terminer, Abandonner
        $status=[
            [
                    'id'=> 1,
                    'nom'=>'Actif',
                    'couleur'=>'info',
            ],

            [
                'id'=> 2,
                'nom'=>'Terminer',
                'couleur'=>'success',
        ],
        [
            'id'=> 3,
            'nom'=>'Abandonner',
            'couleur'=>'warning',
    ],


            ];
            Status::insert($status);
    }
}
