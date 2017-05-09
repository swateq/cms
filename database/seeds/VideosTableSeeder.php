<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        DB::table('videos')->truncate();

        DB::table('videos')->insert(array(
            array(
                'title' => 'Painless Billing With Laravel and Stripe',
                'slug' => Str::slug('Painless Billing With Laravel and Stripe'),
                'video_id' => 'k9KKjxEq0Lg',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Using Eloquent Outside of Laravel',
                'slug' => Str::slug('Using Eloquent Outside of Laravel'),
                'video_id' => 'L0g9ka5qaCc',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Fast Laravel Workflow With Generators',
                'slug' => Str::slug('Fast Laravel Workflow With Generators'),
                'video_id' => 'rmtjulbbSmY',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Laravel Envoy',
                'slug' => Str::slug('Laravel Envoy'),
                'video_id' => 'ZI9vzxvERGI',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'PSR 4 Autoloading',
                'slug' => Str::slug('PSR 4 Autoloading'),
                'video_id' => 'FzdhnbM_0ug',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Gulp This',
                'slug' => Str::slug('Gulp This'),
                'video_id' => '6Jhgkp67GxI',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Test Databases In Memory (with Laravel)',
                'slug' => Str::slug('Test Databases In Memory (with Laravel)'),
                'video_id' => 'NB9KfQiHJO0',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Welcome to the Laravel Community',
                'slug' => Str::slug('Welcome to the Laravel Community'),
                'video_id' => '2_BKIhjHwS8',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Crazy Simple Pagination in Laravel',
                'slug' => Str::slug('Crazy Simple Pagination in Laravel'),
                'video_id' => 'lIEcyOUcNQk',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Better Error Monitoring with Bugsnag and Laravel',
                'slug' => Str::slug('Better Error Monitoring with Bugsnag and Laravel'),
                'video_id' => 'r4gK5uynk2s',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Laravel Basic Authentication in 4 Minutes',
                'slug' => Str::slug('Laravel Basic Authentication in 4 Minutes'),
                'video_id' => 'FqDomWno2C0',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Understanding Fortrabbit Deployment Files',
                'slug' => Str::slug('Understanding Fortrabbit Deployment Files'),
                'video_id' => 'YvJiKI4IQ0Q',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Laravel - How to Tail Log Files',
                'slug' => Str::slug('Laravel - How to Tail Log Files'),
                'video_id' => 'lP5yFWAt8Nk',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Laravel and the N+1 Problem',
                'slug' => Str::slug('Laravel and the N+1 Problem'),
                'video_id' => 'swhWRMkpVsg',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Laravel Artisan Commands 101',
                'slug' => Str::slug('Laravel Artisan Commands 101'),
                'video_id' => 'BviKET-QTEQ',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Form Model Binding in Laravel',
                'slug' => Str::slug('Form Model Binding in Laravel'),
                'video_id' => 'EJwxG3b9j9c',
                'type' => 'youtube',
                'lang' => 'tr',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'C Tags',
                'slug' => Str::slug('C Tags'),
                'video_id' => 'cE7jSTdE_uQ',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'View Composers in Laravel',
                'slug' => Str::slug('View Composers in Laravel'),
                'video_id' => 'X8yqmZtKOoY',
                'type' => 'youtube',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Laracon (Day 1 Talk 3) Kenny Meyers',
                'slug' => Str::slug('Laracon (Day 1 Talk 3) Kenny Meyers'),
                'video_id' => '61269747',
                'type' => 'vimeo',
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
        ));
    }
}
