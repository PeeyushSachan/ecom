<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class proseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('product')->insert(
  
    [
        "name"=>"moto tv",	
        "price"=>"1000"	,
        "category"=>"TV",
        "gallery"=>"https://www.lg.com/in/images/plp-b2c/b2c-1/LMG910EMW-Aurora-Silver-Thumb-260-v.jpg",
    "description"=>"smartphone with 4gb ram "]

              );
    }
}
