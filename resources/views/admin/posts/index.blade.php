@extends('layouts.app')

@section('content')
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Author</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
          <th scope="row">
              {{ $post->name }}
          </th>
          <td>{{ $post->author }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td><a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-primary">View</a></td>
          <td><a href="" class="btn btn-sm btn-success">Edit</a></td>
          <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
        </tr>
        @empty
          
        @endforelse
    </tbody>
  </table>
@endsection