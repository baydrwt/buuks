@extends('layouts.main')


@section('content')
    <div class="container" >
        <h2 class="mb-3 books-categories" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1000">Books Categories</h2>
        <div class="row" > 
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1500">
                    <div class="card bg-dark">
                        <a href="/categories/{{ $category->slugs }}" class="text-white">
                        <img src="https://source.unsplash.com/1000x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-categories card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.6)">{{ $category->name }}</h5>
                        </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
