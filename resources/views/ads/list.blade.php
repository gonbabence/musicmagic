@extends('layouts.default')
@section('content')
    <h2>List of ads</h2>

    <div class="card-deck">
        @foreach ($ads as $ad)
            @include('ads.card', ['ad' => $ad])
        @endforeach
    </div>

@endsection