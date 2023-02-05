@extends('dashboard.layouts.main')

@section('container')
<div class="container d-flex infoBook mb-5">
    <div class="row justify-content-around">
        <div class="col-lg-7 mt-2 mb-3 pt-3">
            <a href="/dashboard/review" class="btn btn-success mb-3">
                <span data-feather="arrow-left"></span>
                Back To All Review</a>
            <a href="/dashboard/review/{{ $book->slugs }}/edit" class="btn btn-warning mb-3 text-white">
                <span data-feather="edit"></span>
                Edit</a>
            <form action="/dashboard/review/{{ $book->slugs }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure?')">
                    <span data-feather="x-circle"></span>Delete
                </button>
            </form>
            <h1 class="bookTitle">{{ $book->bookTitle }}</h1>
            <h5 class="authors">Author : {{ $book->author }}</h5>
            <h5 class="publisher">Publisher : {{ $book->publisher }}</h5>
            <h5 class="category">Category : {{ $book->category->name }}</h5>
            <h5 class="page">Page : {{ $book->page }}</h5>
            <h5 class="releaseDate">Release : {{ $book->created_at->diffForHumans() }}</h5>
            <h5 class="synopsis">{!! $book->synopsis !!}</h5>
        </div>  

        @if($book->image)
            <div class="col-md-5 bg-cover mt-3 d-flex justify-content-center align-items-start">
                <img src="{{ asset('storage/' . $book->image ) }}" alt="" class="pe-3 mt-5" width="300" height="400">
            </div>
        @else
            <div class="col-md-5 bg-cover mt-5 pe-5">
                <img src="https://source.unsplash.com/400x500?{{ $book->bookTitle  }}" alt="" class="pe-3 mt-5">
            </div>
        @endif

    </div>      
</div>
@endsection