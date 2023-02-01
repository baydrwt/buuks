@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="mb-3 books-categories" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1000">Books Category : {{ $category }}</h2>
        <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1500">
                <div class="card">
                    {{-- <img src="https://source.unsplash.com/1000x400?{{ $book->bookTitle  }}"  alt="..." class="card-img-top"> --}}
                    @if($book->image)
                        <img src="{{ asset('storage/' . $book->image ) }}" alt="" class="card-img-top img-category">
                    @else
                        <img src="https://source.unsplash.com/1000x400?{{ $book->bookTitle  }}" alt="" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h5 class="books-title card-title text-dark">{{ $book->bookTitle }}</h5>
                        <p class="books-excerpt card-text text-dark">{{ $book->excerpt }}</p>
                        <a href="/{{ $book->slugs }}" class="btn-readMore btn btn-secondary">Read More</a>
                    </div>
                </div>
            </div>    
        @endforeach
    </div>
@endsection

