<?php

use App\Sala;
use Illuminate\Database\Seeder;

class SalasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sala::create(array(
            'nome' => 'Queen',
            'descricao' => 'A sala preferida pela rainha'
        ));

        Sala::create(array(
            'nome' => 'Led Zeppelin',
            'descricao' => 'A sala do heavy metal'
        ));

        Sala::create(array(
            'nome' => 'Metalica',
            'descricao' => 'A sala do puro metal'
        ));

    }
}
