@extends('layouts.main')

@section('content')
     <div class="container">
        <h5 class="authors mb-3" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1000">Books Review By : {{ $author }}</h5> 
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1500">
                    <div class="card">
                        @if($book->image)
                            <img src="{{ asset('storage/' . $book->image ) }}" alt="" class="card-img-top img-category">
                        @else
                            <img src="https://source.unsplash.com/1000x400?{{ $book->bookTitle  }}" alt="" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{ $book->bookTitle }}</h5>
                            <p class="card-text text-dark">{{ $book->excerpt }}</p>
                            <a href="/{{ $book->slugs }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>        
@endsection