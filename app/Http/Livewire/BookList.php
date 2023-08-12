<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookList extends Component
{
    public function render()
    {
        $books = Book::all();
        
        return view('livewire.book-list', compact('books'));
    }
}