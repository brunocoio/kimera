<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        'name' => Str::random(10),
        'type' => 'in'
        ]);
        DB::table('categories')->insert([
        'name' => Str::random(10),
        'type' => 'out'
        ]);
    }
}
