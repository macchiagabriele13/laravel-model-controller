@extends('layouts.app')

@section('content')
<h1>Home Page</h1>

<div class="container">
    <div class="row">
        @forelse($movies as $movie)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{$movie['title']}}</h3>
                    <h5 class="card-text">{{$movie['original_title']}}</h5>
                    <small>{{$movie['nationality']}}</small>
                    <small>{{$movie['date']}}</small>
                    <small>{{$movie['vote']}}</small>
                </div>
            </div>
        </div>
        @empty
        <div class="col-4">
            <h1>No Movies Avaiable</h1>
        </div>
        @endforelse


    </div>
</div>

@endsection