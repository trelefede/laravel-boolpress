<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = ['App', 'Accessori', 'Badget', 'Problemi', 'Usato', 'News', 'os', 'Soluzioni', 'Riparazioni', 'Unboxing'];

        foreach($tags as $data){
            $tag = new Tag();
            $tag->name = $data;
            $tag->slug = Str::slug($data);
            $tag->save();
        }
    }
}
