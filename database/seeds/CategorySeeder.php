<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['iPhone', 'iPad', 'Mac', 'iOS', 'macOS', 'Altro'];

        foreach($categories as $data){
            $category = new Category();
            $category->name = $data;
            $category->slug = Str::slug($category->name);
            $category->save();
        }
    }
}
