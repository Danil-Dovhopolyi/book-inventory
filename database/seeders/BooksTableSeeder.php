<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  // BooksTableSeeder.php
public function run()
    {
        Book::create([
            'title' => 'Book 1',
            'author' => 'Author 1',
            'publication_year' => 2022,
            'publisher' => 'Publisher 1',
            'isbn' => '1234567890'
        ]);

        Book::create([
            'title' => 'Book 2',
            'author' => 'Author 2',
            'publication_year' => 2023,
            'publisher' => 'Publisher 2',
            'isbn' => '2345678901'
        ]);

    }
}
