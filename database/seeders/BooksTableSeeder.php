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
public function run()
      {
        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'publication_year' => 1925,
            'publisher' => 'Charles Scribner\'s Sons',
            'isbn' => '978-0-7432-7356-5',
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'publication_year' => 1960,
            'publisher' => 'J. B. Lippincott & Co.',
            'isbn' => '978-0-06-112008-4',
        ]);
    }
}
