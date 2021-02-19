@extends ('layout')

@section('content')
<div class="allproducts_main_div">

        {{-- SECTION HORLOGES --}}
        {{-- SECTION HORLOGES --}}
    <div class="ap_watches_div d-flex justify-content-center align-items-center">

        <a href="/"><button class="btn btn-primary btn-allpd_back1">Back</button></a>
        {{-- TITLE OF SECTION HORLOGES --}}
        {{-- TITLE OF SECTION HORLOGES --}}
        <h1 class="text-white font-weight-bold horloge_title">Horloges</h1>


        {{-- CONTENT OF SECTION HORLOGES --}}
        {{-- CONTENT OF SECTION HORLOGES --}}
        <a href="{{ Route('products.show','1') }}">
            <div class="card horloge_card text-center">
                <img class="card-img-top" src="/images/vincero_brown_gold.webp" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>

        <a href="{{ Route('products.show','1') }}">
            <div class="card horloge_card text-center">
                <img class="card-img-top" src="/images/vincero_brown_gold.webp" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>

        <a href="{{ Route('products.show','1') }}">
            <div class="card horloge_card text-center">
                <img class="card-img-top" src="/images/vincero_brown_gold.webp" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>

        <a href="{{ Route('products.show','1') }}">
            <div class="card horloge_card text-center">
                <img class="card-img-top" src="/images/vincero_brown_gold.webp" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>


    </div>



        {{-- SECTION RIEMEN --}}
        {{-- SECTION RIEMEN --}}
    <div class="ap_belts_div d-flex justify-content-center align-items-center">


        {{-- TITLE OF SECTION RIEMEN --}}
        {{-- TITLE OF SECTION RIEMEN --}}
        <h1 class="text-white font-weight-bold riemen_title">Riemen</h1>


        {{-- SECTION OF SECTION RIEMEN --}}
        {{-- SECTION OF SECTION RIEMEN --}}
        <a href="{{ Route('products.show','1') }}">
            <div class="card riemen_card text-center">
                <img class="card-img-top" src="/images/belt_darkbrown.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>

        <a href="{{ Route('products.show','1') }}">
            <div class="card riemen_card text-center">
                <img class="card-img-top" src="/images/belt_darkbrown.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>

        <a href="{{ Route('products.show','1') }}">
            <div class="card riemen_card text-center">
                <img class="card-img-top" src="/images/belt_darkbrown.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>

        <a href="{{ Route('products.show','1') }}">
            <div class="card riemen_card text-center">
                <img class="card-img-top" src="/images/belt_darkbrown.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>


        <a href="/"><button class="btn btn-primary btn-allpd_back2">Back</button></a>
        </div>
</div>

@endsection
