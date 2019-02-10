@extends('layouts.default')
@section('content')
    {{--{{ $ad['mfr'] }}--}}
    {{--{{ $ad['model'] }}--}}
    {{--{{ $ad['description'] }}--}}
    {{--{{ $ad['condition'] }}--}}

    <div class="col-md-12">
        <p>{{ $ad['mfr'] }} - {{ $ad['model'] }}</p>
        <hr>
        <p><!-- image --></p>
        <hr>
        <p>Price: {{ $ad['price'] }} Ft</p>
        <p class="active">Description:</p>
        <div class="col-md-12">
            <div class="tab-content">
                {{ $ad['description'] }}
            </div>
        </div>
        <hr>
    </div>
@endsection