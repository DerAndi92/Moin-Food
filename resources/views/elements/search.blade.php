<!-- Search -->
<section id="search">
    <div class="container">
        <div class="search-inner">
            <div class="search-map-icon"></div>

            <h1>Essen. Trinken. Überall in Hamburg.</h1>
            <form class="search-form">
                <div class="search-form-fields">
                    <div class="search-input-place">
                     <input type="text" class="input" tabindex="1" placeholder="Wo möchtest du suchen?" />
                    </div>
                    <div class="search-options">
                        <div class="mf-input-select">
                            <select name="kitchen">
                                <option class="icon-down-open" value="0" selected="true" disabled="disabled">Landesküche</option>
                                @foreach($kitchens as $kitchen)
                                    <option class="icon-down-open" value="{{$kitchen->id}}">{{$kitchen->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mf-input-select">
                            <select name="anlass">
                                <option class="icon-down-open" value="0" selected="true" disabled="disabled">Anlass</option>
                            </select>
                        </div>
                        <div class="mf-input-select">
                            <select name="preiskategorie">
                                <option class="icon-down-open" value="0" selected="true" disabled="disabled">Preiskategorie</option>
                            </select>
                         </div>
                        <div class="mf-input-select">
                            <select name="restaurant-type">
                                <option class="icon-down-open" value="0" selected="true" disabled="disabled">Ambiente</option>
                                @foreach($restaurantTypes as $restaurantType)
                                    <option class="icon-down-open" value="{{$restaurantType->id}}">{{$restaurantType->name}}</option>
                                @endforeach
                            </select>
                         </div>
                    </div>
                </div>

                <div class="search-form-buttons">
                    <button type="submit" class="search-button" name="action" value="1">Los geht's!</button>
                    <a href="/" class="search-more-button">weitere Optionen</a>
                </div>
            </form>
        </div>
    </div>
</section>