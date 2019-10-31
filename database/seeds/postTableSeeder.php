<?php

use Illuminate\Database\Seeder;
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
            'path_to_image' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-865109088-1548970937.jpg?crop=1.00xw:0.752xh;0,0.248xh&resize=480:*'
        ]);
    }
}
