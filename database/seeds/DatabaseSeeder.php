<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        DB::table('news')->delete();
        DB::table('news')->insert([[
            'name' => "My first article",
            'preview_text' => "WOW, such news, many texts",
            'html_text' => 'abcdasd<p>hi</p>'
        ], [
            'name' => "My second article",
            'preview_text' => "This shit seems to be serious",
            'html_text' => '<h1>Second</h1>'
        ]]);
    }
}