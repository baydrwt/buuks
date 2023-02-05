@extends('layouts.main')

@section('content')
    <div class="container d-flex infoBook mb-5 mt-3" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1500">
        <div class="row justify-content-around">
            <div class="col-md-7 mt-3 mb-2 pt-3">
                <h2 class="bookTitle">{{ $books->bookTitle }}</h2>
                <h5 class="author">Reviewer : <a href="/authors/{{ $books->user->name }}">{{ $books->user->name }}</a></h5>
                <h5 class="authors">Author : {{ $books->author }}</h5>
                <h5 class="publisher">Publisher : {{ $books->publisher }}</h5>
                <h5 class="category">Category : <a href="/categories/{{ $books->category->slugs }}">{{ $books->category->name }}</a></h5>
                <h5 class="page">Page : {{ $books->page }}</h5>
                <h5 class="releaseDate">Release : {{ $books->created_at->diffForHumans() }}</h5>
                <h5 class="synopsis">{!! $books->synopsis !!}</h5>
            </div>  
            <div class="col-lg-5 bg-cover mt-4 d-flex mb-5">
                @if($books->image)
                <img src="{{ asset('storage/' . $books->image ) }}" alt="" class="mt-5 justify-content-center me-auto ms-auto img-book">
            @else
                <img src="https://source.unsplash.com/400x500?{{ $books->bookTitle  }}" alt="" class="mt-5 justify-content-center me-auto ms-auto img-book">
            @endif
            </div>
        </div>      
    </div>
@endsection
