<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        DB::table('articles')->truncate();

        DB::table('articles')->insert(array(
            array(
                'title' => 'Cras vitae vulputate ipsum',
                'slug' => Str::slug('Blog Post'),
                'content' => 'This is the first blog post.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet facilisis ipsum. Aenean placerat orci ut ligula hendrerit egestas. Curabitur non porttitor elit. Ut scelerisque est ipsum, non molestie quam consequat accumsan. Suspendisse luctus metus ut mi consectetur, mollis convallis tortor posuere. Duis vestibulum erat at lacus ultrices, ut aliquam turpis pulvinar. Cras lobortis dui nisi, sed varius massa pulvinar sit amet. Cras vitae vulputate ipsum. Ut varius lectus quam, id ultrices nisl tempor mattis. Etiam sit amet imperdiet ipsum.

Sed porta velit vitae quam bibendum, ut convallis neque pharetra. Sed tempus velit tristique iaculis blandit. Phasellus et egestas lorem. Duis elementum turpis sollicitudin est consequat, vel viverra est tristique. Pellentesque lacinia posuere ante. Duis et consequat justo. Sed fermentum velit elit. Nulla suscipit vulputate ipsum, mattis tincidunt orci luctus eget. Nam in volutpat turpis. Cras vitae sapien urna. Pellentesque vestibulum adipiscing malesuada. Donec ornare sollicitudin libero ut hendrerit. ',
                'meta_keywords' => str_replace(' ', ', ', strtolower('Blog Post')),
                'meta_description' => strip_tags('Blog Post'),
                'category_id' => 1,
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Vestibulum at congue enim',
                'slug' => Str::slug('Blog Post 14'),
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ',

                'meta_keywords' => str_replace(' ', ', ', strtolower('Blog Post 14')),
                'meta_description' => strip_tags('Blog Post 14'),
                'category_id' => 5,
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
        ));
    }
}
