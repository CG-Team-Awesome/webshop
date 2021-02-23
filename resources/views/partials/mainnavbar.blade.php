<div id="mainNavbar" class="container-fluid fixed-top p-4 scrolled">
    <div class="col-12">
        <div class="d-flex justify-content-end">
            @if (Route::has('login'))
            <div class="">
                @auth
                <a class="" href="{{ url('/profile') }}"><img src="/images/user.svg" class="user-icon" alt="user svg"></a>
                <a class="" href="{{ url('/buy') }}"><img src="/images/shopping-cart.svg" class="cart-icon" alt="cart svg"></a>
                <a href="{{ url('/logout') }}"><img src="/images/exit.svg" alt="logout svg" class="logout-icon"></a>
                @else
                <a class="title-font mr-1 navhover" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a class="title-font ml-3 navhover" href="{{ route('register') }}">Register</a>
                @endif
                @endif
            </div>
            @endif
        </div>
    </div>
</div>



