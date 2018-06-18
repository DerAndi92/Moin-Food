@if (session()->has('message'))
    <div id="message">
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
    </div>
@endif