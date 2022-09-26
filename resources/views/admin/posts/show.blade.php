@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-image text-center">
                        <img class="w-40" src="{{ $post->post_image }}" alt="">
                    </div>
                    <div class="card-title">
                        <h2>
                            {{ $post->title }}
                        </h2>
                    </div>
                   <div class="subtitle">
                    <p>
                        Post id: {{ $post->user->name }} | Written: {{ $post->post_date }}
                    </p>
                   </div>
                   <div class="card-text">
                    <p>
                      Category:  {{ $post->category->name }}
                    </p>
                    <p>
                        {{ $post->post_content }}
                    </p>
                   </div>
                   <div class="card-footer">
                       <a href="" class="btn btn-success">Edit</a>
                       <a href="" class="btn btn-success">Delete</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection