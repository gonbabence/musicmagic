@extends('layouts.default')
@section('content')

    <div class="container">
        <div class="text-center">
            <h3>{{ $ad['mfr'] }} - {{ $ad['model'] }}</h3>
            <hr>

            <div class="col-sm-8 offset-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>

            <hr>

            <p>Price:</p>
            <h4>{{ $ad['price'] }} Ft</h4>

            <hr>
            <p>Description:</p>

            <div class="col-md-12">
                <div class="tab-content">
                    {{ $ad['description'] }}
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection
