@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Blog Posts</h1>
        </div>
        <div class="col-md-4 text-right">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif
    <div class="mt-3">
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <span>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

