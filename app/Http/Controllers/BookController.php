<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function categories(){
        return view('categories', [
            "title" => "Categories",
            "categories" => Category::all()
        ]);  
    }
    public function category(Category $category, Book $book){
        return view('category', [
            "title" => $category->name,
            "books" => $category->books,
            "category" => $category->name,
            "book" => $book
        ]);
    }
}