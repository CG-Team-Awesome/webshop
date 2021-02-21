<div id="mainNavbar" class="container-fluid fixed-top p-4 scrolled">
    <div class="col-12">
        <div class="d-flex justify-content-end">
            @if (Route::has('login'))
            <div class="">
                @auth
                <a class="title-font" href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                <a class="title-font mr-1" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a class="title-font ml-3" href="{{ route('register') }}">Register</a>
                @endif
                @endif
            </div>
            @endif
        </div>
    </div>
</div>



