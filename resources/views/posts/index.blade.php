@extends('posts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 10 CRUD Example</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success mb-2" href="{{ route('posts.create') }}">Create New Post</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered text-white">
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('posts.show', $post->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection