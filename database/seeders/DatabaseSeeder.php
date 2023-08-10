<?php

namespace Database\Seeders;

use Database\Seeders\UsersTableSeeder;
use Database\Seeders\BooksTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
     $this->call(UsersTableSeeder::class);
     $this->call(BooksTableSeeder::class);
    }
}
