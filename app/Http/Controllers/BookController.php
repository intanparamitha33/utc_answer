<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Detail;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show()
    {
        $books = Book::all();
        $dates = Detail::orderByDesc('date')->take(4)->get();
        $views = Detail::orderByDesc('count_view')->take(1)->get();

        return view('home', compact('books', 'dates', 'views'));
    }
}
