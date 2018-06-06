<!-- Search -->
<div id="search">
<form>
    <div class="icon-search"><img src="{{asset('images/icon_place.png')}}" alt ="place"></div>

        <h1>Essen. Trinken. Wo du willst.</h1>

        <input id="search-input" type="text" class="input_text" tabindex="1" placeholder="Gib deinen Standort ein" />
        <button type="button" class="start-suche">Los geht's!</button>
        <div class="search-options">
            <select name="typ">
                <option class="icon-down-open" value="0">Typ</option>
            </select>
            <select name="anlass">
                <option class="icon-down-open" value="0">Anlass</option>
            </select>
            <select name="preiskategorie">
                <option class="icon-down-open" value="0">Preiskategorie</option>
            </select>
            <select name="art">
                <option class="icon-down-open" value="0">Art</option>
            </select>
            <select name="altersspanne">
                <option class="icon-down-open" value="0">Altersspanne</option>
            </select>

            <div class="advanced-options">erweiterte Optionen</div>
        </div>
</form>
</div>