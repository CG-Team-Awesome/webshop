@extends ('layout')

@section('content')
<div class="allproducts_main_div">

        {{-- SECTION HORLOGES --}}
        {{-- SECTION HORLOGES --}}
    <div class="ap_watches_div d-flex justify-content-center align-items-center row">

        <a href="/"><button class="btn btn-mau shadow-mau btn-allpd_back1">Back</button></a>
        {{-- TITLE OF SECTION HORLOGES --}}
        {{-- TITLE OF SECTION HORLOGES --}}
        <h1 class="text-white font-weight-bold horloge_title title-font">Horloges</h1>

        {{-- CONTENT OF SECTION HORLOGES --}}
        {{-- CONTENT OF SECTION HORLOGES --}}
        <div class="row d-flex justify-content-center foreach_watches">

            @foreach ($watches as $watch)

                    <div class="card horloge_card text-center col-md-3 m2">
                            <img class="card-img-top" src="/images/vincero_brown_gold.webp" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-white title-font">{{ $watch->name }}</h4>
                            <h5 class="card-text text-white title-font mb-4">{{ $watch->tagline }}</h5>
                            <a href="{{ Route('product.show', $watch->id) }}" class="btn btn-mau shadow-mau mt-2">Show</a>
                        </div>
                    </div>

            @endforeach
        </div>

    </div>



        {{-- SECTION RIEMEN --}}
        {{-- SECTION RIEMEN --}}
    <div class="ap_belts_div d-flex justify-content-center align-items-center row">


        {{-- TITLE OF SECTION RIEMEN --}}
        {{-- TITLE OF SECTION RIEMEN --}}
        <h1 class="text-white font-weight-bold title-font riemen_title">Riemen</h1>


        {{-- SECTION OF SECTION RIEMEN --}}
        {{-- SECTION OF SECTION RIEMEN --}}
        <div class="row d-flex justify-content-center foreach_belts">

            @foreach ($belts as $belt)

                    <div class="card riemen_card text-center col-md-3 m2">
                            <img class="card-img-top" src="/images/belt_darkbrown.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-white title-font">{{ $belt->name }}</h4>
                            <h5 class="card-text text-white title-font mb-4">{{ $belt->tagline }}</h5>
                            <a href="{{ Route('product.show', $belt->id) }}" class="btn btn-mau shadow-mau mt-2">Show</a>
                        </div>
                    </div>

            @endforeach

        </div>

        <a href="/"><button class="btn btn-mau shadow-mau btn-allpd_back2">Back</button></a>
        </div>
</div>

@endsection
