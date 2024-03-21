@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $categories->title }}</h1>

                <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my categories</a>
                <a href="/dashboard/categories/{{ $categories->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/categories/{{ $categories->slug }}" method="categories" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                  <span data-feather="x-circle"></span> Delete</button>
                </form>

                @if($categories->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'. $categories->image) }}" alt="{{ $categories->name }}" class="img-fluid mt-3" >
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $categories->name }}" class="card-img-top" alt="{{ $categories->name }}"  class="img-fluid mt-3">
                @endif
                
                <article class="my-3 fs-5 ">
                    {!! $categories->body !!}
                </article>


                <a href="/categories" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection