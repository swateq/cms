<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        DB::table('menus')->truncate();

        DB::table('menus')->insert(array(
            array(
                'title' => 'Home',
                'url' => '/',
                'order' => 10,
                'parent_id' => 0,
                'type' => 'module',
                'option' => 'home',
                'is_published' => true,
                'lang' => 'en',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ),
            array(
                'title' => 'News',
                'url' => '/en/news',
                'order' => 11,
                'parent_id' => 0,
                'type' => 'module',
                'option' => 'news',
                'is_published' => true,
                'lang' => 'en',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ),
            array(
                'title' => 'Blog',
                'url' => '/en/article',
                'order' => 12,
                'parent_id' => 0,
                'type' => 'module',
                'option' => 'blog',
                'is_published' => true,
                'lang' => 'en',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ),
            array(
                'title' => 'Projects',
                'url' => '/en/project',
                'order' => 13,
                'parent_id' => 0,
                'type' => 'module',
                'option' => 'project',
                'is_published' => true,
                'lang' => 'en',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ),
            array(
                'title' => 'Videos',
                'url' => '/en/video',
                'order' => 14,
                'parent_id' => 0,
                'type' => 'module',
                'option' => 'video',
                'is_published' => true,
                'lang' => 'en',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ),
            array(
                'title' => 'Faq',
                'url' => '/en/faq',
                'order' => 15,
                'parent_id' => 0,
                'type' => 'module',
                'option' => 'faq',
                'is_published' => true,
                'lang' => 'en',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ),
            array(
                'title' => 'Contact Us',
                'url' => '/en/contact',
                'order' => 16,
                'parent_id' => 0,
                'type' => 'module',
                'option' => 'contact',
                'is_published' => true,
                'lang' => 'en',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ),
        ));
    }
}
