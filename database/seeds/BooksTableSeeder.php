<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')->insert([
          'name' => "Przedwojnie",
          'year' => "2020",
          'publication_place' => "Warszawa",
          'pages' => "400",
          'price' => "25.17",
      ]);
      DB::table('books')->insert([
          'name' => "Wyrwa",
          'year' => "2020",
          'publication_place' => "Katowice",
          'pages' => "384",
          'price' => "27.99",
      ]);

      DB::table('books')->insert([
          'name' => "Szepty drewnianych papug",
          'year' => "2020",
          'publication_place' => "Kraków",
          'pages' => "352",
          'price' => "59.99",
      ]);
    }
}
