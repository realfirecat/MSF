<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Thema::class, 50)->create();
        factory(App\User::class, 50)->create();
        factory(App\Flashcard::class, 50)->create();
    }
}