@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')


<h2 class="text-light">Current Series</h2>
<div class="row">
    @foreach ($comics as $comic)
        <div class="col-2">
            <div>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            <h4 class="text-light">
                {{ $comic['title'] }}
            </h4>
            <h3 class="text-light">
                {{ $comic['price'] }}
            </h3>
        </div>
    @endforeach
    
</div>
<button type="button" class="btn btn-primary">Load More</button>
@endsection
