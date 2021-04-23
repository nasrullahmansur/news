<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::loginUsingId(1);
        Category::create([
            'pl_name' => 'Business',
            'sl_name' => 'ব্যাবসা',
            'pl_slug' => 'business',
            'sl_slug' => 'ব্যাবসা',
        ]);

        Category::create([
            'pl_name' => 'Life Style',
            'sl_name' => 'জীবনের সৈন্দর্য্য',
            'pl_slug' => 'life-style',
            'sl_slug' => 'জীবনের-সৌন্দর্য্য',
        ]);

        Category::create([
            'pl_name' => 'health',
            'sl_name' => 'স্বাস্থ',
            'pl_slug' => 'health',
            'sl_slug' => 'স্বাস্থ',
        ]);

        Category::create([
            'pl_name' => 'sports',
            'sl_name' => 'খেলাধুলা',
            'pl_slug' => 'sports',
            'sl_slug' => 'খেলাধুলা',
        ]);



    }
}
