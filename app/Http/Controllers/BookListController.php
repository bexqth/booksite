<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookListController extends Controller
{

    public function index()
    {
        //https://laravel.com/docs/11.x/queries
        $books = DB::table('books')->get();
        return view('booklist', ['books' => $books]);
        
        /*$books = Book::all();
        return view('booklist', compact('books'));*/
    }

    public function showBook($isbn)
    {
        $chosenBook = DB::table('books')->where('isbn', $isbn)->first();
        return view('book_template', ['chosenBook' => $chosenBook]); //chosenBook - the name which i will refer it to in the html
    }
}
