@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Review</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/review/{{ $book->id }}" method="post" class="mb-4" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="bookTitle" class="form-label">Book Title</label>
                <input type="text" class="form-control @error('bookTitle') is-invalid @enderror" id="bookTitle" name="bookTitle" required autofocus value="{{ old('bookTitle', $book->bookTitle) }}">
                @error('bookTitle')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slugs" class="form-label">Slugs</label>
                <input type="text" class="form-control @error('slugs') is-invalid @enderror" id="slugs" name="slugs" value="{{ old('slugs', $book->slugs) }}">
                @error('slugs')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author', $book->author) }}">
                @error('author')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" name="publisher" value="{{ old('publisher' ,$book->publisher ) }}">
                @error('publisher')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="page" class="form-label">Page</label>
                <input type="number" class="form-control @error('page') is-invalid @enderror" id="page" name="page" value="{{ old('page', $book->page ) }}" min="1">
                @error('page')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if(old('category_id', $book->category_id ) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Cover Book</label>
                <input type="hidden" name="oldImage" value="{{ $book->image }}">
                @if($book->image)
                    <img src="{{ asset('storage/' . $book->image) }}" class="img-preview img-fluid col-sm-5 mb-3 d-block">
                @else
                    <img class="img-preview img-fluid col-sm-5 mb-3">
                @endif
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                @error('synopsis')
                       <p class="text-danger">{{ $message }}</p> 
                 @enderror
                <label for="synopsis" class="form-label">Synopsis</label>
                <input id="synopsis" type="hidden" name="synopsis" value="{{ old('synopsis', $book->synopsis) }}">
                <trix-editor input="synopsis"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Update Review</button>
        </form>
    </div>

    <script>
        const bookTitle = document.querySelector("#bookTitle");
        const slugs = document.querySelector("#slugs");

        bookTitle.addEventListener("keyup", function() {
            let preslugs = bookTitle.value;
            preslugs = preslugs.replace(/ /g,"-");
            slugs.value = preslugs.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        });

        function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }}
    </script>
@endsection