@extends('layouts.default')
@section('content')
    {{--{{ $ad['mfr'] }}--}}
    {{--{{ $ad['model'] }}--}}
    {{--{{ $ad['description'] }}--}}
    {{--{{ $ad['condition'] }}--}}

    <div class="col-md-12">
        <p><?=sprintf('%s - %s', $ad['mfr'], $ad['model'])?></p>
        <hr>
        <p><!-- image --></p>

        <hr>

        <p>Price: <?=sprintf('%s Ft', $ad['price'])?></p>

        <p class="active">Description:</p>
        <div class="col-md-12">
            <div class="tab-content">
                {{ $ad['description'] }}
            </div>
        </div>

        <hr>
    </div>
@endsection