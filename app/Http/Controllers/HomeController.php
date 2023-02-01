<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "Home",
            // "books" => Book::all(),
            "books" => Book::latest()->get()
        ]);
    }
    public function infobook(Book $book){
        return view('book', [
            "title" => $book->bookTitle,
            "books" => $book,
        ]);
    }

    public function about(){
        return view('about', [
            "title" => "About",
        ]);
    }

    public function dashboard(){
        return view('dashboard.dashboard', [
            "title" => "Dashboard",
        ]);
    }
}