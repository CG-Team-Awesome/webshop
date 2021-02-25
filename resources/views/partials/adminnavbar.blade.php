<div id="mainNavbar" class="container-fluid fixed-top p-4">
    <div class="col-12">
        <div class="d-flex justify-content-end">

                <div>
                    <a href="{{ Route('admin.product.index') }}">Product</a>
                    <a href="{{ Route('admin.category.index') }}">Category</a>
                    <a href="{{ Route('admin.supplier.index') }}">Supplier</a>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
            @if (Route::has('login'))
            <div class="">
                @auth
                <form method="POST" action="{{ Route('logout') }}">
                    <a class="" href="{{ url('/profile') }}"><img src="/images/user.svg" class="user-icon"
                            alt="user svg"></a>

                    @csrf
                    <a href="{{ Route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"><img
                            src="/images/exit.svg" alt="logout svg" class="logout-icon"></a>
                </form>
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
