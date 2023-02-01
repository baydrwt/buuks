@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Review</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-8">
      <a href="/dashboard/review/create" class="btn btn-primary mb-3">Create New Review</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr class="text-white">
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($books as $book)
            <tr class="text-white">
              <td>{{ $loop->iteration }}</td>
              <td>{{ $book->bookTitle }}</td>
              <td>{{ $book->category->name }}</td>
              <td>
                <a href="/dashboard/review/{{ $book->slugs }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/review/{{ $book->slugs }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/review/{{ $book->slugs }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                  <span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>                
            @endforeach
          </tbody>
        </table>
      </div>
@endsection