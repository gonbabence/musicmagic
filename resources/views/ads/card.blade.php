<div class="col-sm-4">
    <a class="card" href="/ads/{{ $ad['_id'] }}">
        <div class="card-header text-center">
            {{ $ad['mfr'] }} - {{ $ad['model'] }}
        </div>
        <div class="card-body">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="card-footer text-center">
            {{ $ad['price'] }} Ft
        </div>
    </a>
</div>
