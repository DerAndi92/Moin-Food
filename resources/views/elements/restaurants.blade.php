<section id="restaurant-list">
    <div class="container">
        <h2 class="headline">Ergebnisse deiner Suche</h2>
        <ul class="restaurant-cards">
            @foreach($restaurants as $restaurant)
                @include('elements.restaurant',   ['restaurant' => $restaurant])
            @endforeach
        </ul>
    </div>
</section>