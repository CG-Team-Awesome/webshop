<div class="container-fluid fixed-top p-4">
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
