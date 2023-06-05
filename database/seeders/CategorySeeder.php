<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Fantasy",
            "Mystery",
            "Romance",
            "Adventure",
            "History",
            "Science Fiction",
            "Biography",
            "Horror",
            "Non-Fiction",
            "Technology",
            "Culture",
            "Lifestyle"
        ];
        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($category, '-');
            $newCategory->save();
        }

    }
}

/* php artisan db:seed --class=CategorySeeder */