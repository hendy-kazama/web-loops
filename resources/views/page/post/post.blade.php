@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Content</th>
                <th scope="col">Name Penulis</th>
                <th scope="col">Email Penulis</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->user->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
        </div>
    </div>
</div>
@endsection
