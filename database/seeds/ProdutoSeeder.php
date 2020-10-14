<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'ps4', 'codigo' => '5624', 'preco' => '1500.00', 'quantidade' => 100,
            'usuario_id' => 1
        ]);
    }
}
