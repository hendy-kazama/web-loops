@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                <!-- {{$user->comment}} -->
                @foreach ($user->comment as $komentar)
                    {{$loop->index+1}}. {{$komentar->comment}} <br>
                @endforeach
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
        </div>
    </div>
</div>
@endsection
