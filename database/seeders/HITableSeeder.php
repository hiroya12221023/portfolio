<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
{
    
    $param = [
        'name' => 'taro',
        'mail' => 'taro@yamada.jp',
        'age' => 3,
        'tel'=>555,
    ];
    DB::table('people')->insert($param);

    $param = [
        'name' => 'tomoo',
        'mail' => 'hanako@flower.jp',
        'age' => 34,
    ];
    DB::table('people')->insert($param);

    $param = [
        'name' => 'sachiko',
        'mail' => 'sachiko@flower.jp',
        'age' => 56,
    ];
}
}