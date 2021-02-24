@extends('layout')

@section('content')

<div class="show_page_outer-wrapper">
    <div class="show_page_inner-wrapper">

        {{-- SHOW PAGE LEFT HALF --}}
        {{-- SHOW PAGE LEFT HALF --}}
    <div class="sp_slide sp_lefthalf d-flex justify-content-center align-items-center">

            <a href="/"><button class="btn btn-mau shadow-mau btn-showpage1">Back</button></a>
            {{-- PRODUCT PICTURE DIV --}}
            {{-- PRODUCT PICTURE DIV --}}
                <div class="sp_left_div1 d-flex justify-content-center align-items-center row" id="gallery" data-toggle="modal" data-target="#exampleModal">
                    <h1 class="text-center text-white col-12 title-font"> Pictures </h1>
                    @foreach ($product->images as $image)
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="{{ $image->url }}"
                        alt="{{ $image->alt }}" data-target="#carouselExample" data-slide-to="0">
                    </div>
                    @endforeach
                    <button class="btn btn-mau atc-btn shadow-mau">Add to Cart</button>
                </div>



            {{-- PRODUCT INFO DIV --}}
            {{-- PRODUCT INFO DIV --}}
                <div class="sp_left_div2 d-flex justify-content-center align-items-center row">
                    <h1 class="text-center text-white col-12 title-font"> Product Info </h1>
                    <div class="sp_left_div2_inner d-flex justify-content-center align-items-center shadow-mau row">
                        <div class="col-12 d-flex justify-content-center row align-items-center">
                            <h2 class="text-center text-white title-font col-12">{{ $product->name }}</h2>
                            <div class="product_name_underline"></div>
                        </div>
                        <div class="col-12">
                            <h3 class="text-center text-white text-font">{{ $product->tagline }}</h3>
                        </div>
                        <div class="col-12">
                            <h3 class="text-center text-white text-font">{{ $product->description }}</h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center text-white text-font">Strap Color</h3> <h3 class="text-center text-white text-font"> {{ $product->strap_color }} </h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center text-white text-font">Size</h3> <h3 class="text-center text-white text-font"> {{ $product->size }} </h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center text-white text-font">Stock</h3> <h3 class="text-center text-white text-font"> @switch ($product->in_stock) @case(0) Not available @break @case(1) Only one left @break @default Available @endswitch </h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center text-white text-font">Product Price</h3> <h3 class="text-center text-white text-font"> &euro;{{ $product->price }} </h3>
                        </div>
                    </div>
                </div>



            {{-- PRODUCT REVIEW DIV --}}
            {{-- PRODUCT REVIEW DIV --}}
                <div class="sp_left_div3 d-flex justify-content-center align-items-center row">
                    <h1 class="text-white text-center col-12 mb-4 title-font"> Reviews </h1>
                    <div class="div3_review_div col-12 shadow-mau">
                        <h3 class="text-white text-center text-font mt-4">
                            {{ $product->reviews->first()->review }}
                        </h3>
                    </div>
                    <div class="div3_review_div col-12 shadow-mau">
                        <h3 class="text-white text-center text-font mt-4">
                            {{ $product->reviews->first()->review }}
                        </h3>
                    </div>
                    <button class="btn btn-success btn-review shadow-mau">+</button>
                    <a href="/"><button class="btn btn-mau shadow-mau btn-showpage2">Back</button></a>
                </div>
            </div>


        {{-- SHOW PAGE RIGHT HALF --}}
        {{-- SHOW PAGE RIGHT HALF --}}
      <div class="sp_slide sp_righthalf">

      </div>
    </div>
  </div>

@endsection
