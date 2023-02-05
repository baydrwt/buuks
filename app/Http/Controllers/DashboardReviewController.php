<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.review.index', [
            'books' => Book::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.review.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bookTitle' => 'required|max:255',
            'slugs' => 'required|unique:books',
            'author' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'synopsis' => 'required',
            'publisher' => 'required',
            'page' => 'required'
        ]); 

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('book-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['authors'] = auth()->user();
        $validatedData['excerpt'] = Str::limit(strip_tags($request->synopsis), 80);

        Book::create($validatedData);

        return redirect('/dashboard/review')->with('success', 'New review has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {

        return view('dashboard.review.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('dashboard.review.edit', [
            'book' => $book,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'bookTitle' => 'required|max:255',
            'category_id' => 'required',
            'author' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'synopsis' => 'required',
            'publisher' => 'required',
            'page' => 'required'
        ]; 

        if($request->slugs != $book->slugs){
            $rules['slugs'] = 'required|unique:books';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('book-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['authors'] = auth()->user();
        $validatedData['excerpt'] = Str::limit(strip_tags($request->synopsis), 80);

        Book::where('id', $book->id)
                    ->update($validatedData);

        return redirect('/dashboard/review')->with('success', 'Review has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $review)
    {
        if($review->image){
            Storage::delete($review->image);
        }

        Book::destroy($review->id);

        return redirect('/dashboard/review')->with('success', 'Review has been deleted!');
    }

}
