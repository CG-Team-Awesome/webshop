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
        @foreach ($watches as $watch)
        <a href="{{ Route('product.show', $watch->id) }}">
            <div class="card horloge_card text-center">
                <img class="card-img-top" src="/images/vincero_brown_gold.webp" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{ $watch->name }}</h5>
                <p class="card-text">{{ $watch->tagline }}</p>
                <a href="{{ Route('product.show', $watch->id) }}" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>
        @endforeach

    </div>



        {{-- SECTION RIEMEN --}}
        {{-- SECTION RIEMEN --}}
    <div class="ap_belts_div d-flex justify-content-center align-items-center">


        {{-- TITLE OF SECTION RIEMEN --}}
        {{-- TITLE OF SECTION RIEMEN --}}
        <h1 class="text-white font-weight-bold riemen_title">Riemen</h1>


        {{-- SECTION OF SECTION RIEMEN --}}
        {{-- SECTION OF SECTION RIEMEN --}}
        @foreach ($belts as $belt)
        <a href="{{ Route('product.show', $belt->id) }}">
            <div class="card riemen_card text-center">
                <img class="card-img-top" src="/images/belt_darkbrown.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">$belt->name</h5>
                <p class="card-text">$belt->tagline</p>
                <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
        </a>
        @endforeach

        <a href="/"><button class="btn btn-primary btn-allpd_back2">Back</button></a>
        </div>
</div>

@endsection
