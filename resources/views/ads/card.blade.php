<a class="card" style="width: 18rem;" href="/ads/{{ $ad['_id'] }}">
    <img class="card-img-top" src="https://via.placeholder.com/200x100" alt="Card image cap">
    <div class="card-body text-center">
        <p class="card-text">
            <?=sprintf('%s - %s', $ad['mfr'], $ad['model'])?>
        </p>
        <p class="card-text">
            <?=sprintf('%s Ft', $ad['price'])?>
        </p>
    </div>
</a>