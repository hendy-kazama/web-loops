@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{$message}}
        </div>
        @endif

        @if ($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{$message}}
        </div>
        @endif
        
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-header border-primary mb-3">{{$post->title}}</div>
                <div class="card-body text-primary">
                    {{$post->content}}
                </div>
                <div class="card-footer">
                    Penulis : {{$post->user->name}}
                    <div class="float-right">
                    <a href="{{ url('/comment/'.$post->id) }}"> Komentari </a> |
                    <span class="text-success">{{count($post->comment)}} Komentar </span>
                    </div>
                </div>
            </div><br>
        @endforeach
        </div>
    </div>
</div>
@endsection