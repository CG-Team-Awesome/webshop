<div class="container-fluid fixed-top p-4" id="mainNavbar" style="background: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgba(255, 255, 255, 0) 100%)">
    <div class="col-12">
        <div class="d-flex justify-content-end">
            @if (Route::has('login'))
            <div class="">
                @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4">Register</a>
                @endif
                @endif
            </div>
            @endif
        </div>
    </div>
</div>


{{-- #mainNavbar{
    background-color: red !important;
    background: linear-gradient(to bottom, rgba(86, 128, 221, 0.6) 0%, rgba(41, 111, 216, 1) 100%) 
} --}}