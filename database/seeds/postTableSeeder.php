<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Post;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'author_id' => 1,
            'title' => 'Post title',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex amet hic, sapiente dolor tenetur numquam deleniti dicta voluptas obcaecati incidunt optio vel. Magni nobis perferendis sunt commodi, est vitae exercitationem?',
            'path_to_image' => 'posts-img/volei.jpeg'
        ]);
    }
}
