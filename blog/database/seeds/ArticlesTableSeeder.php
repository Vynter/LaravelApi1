<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserer dans la table articles dans le champ content un str random de 10 caractére

        for ($i = 0; $i < 10; $i++) {

            DB::table('articles')->insert([
                'content' => Str::random(10)
            ]);
        }
    }
}