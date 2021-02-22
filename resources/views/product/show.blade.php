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
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="/images/show_page_images/example_riem_01.png"
                        alt="example_belt_01" data-target="#carouselExample" data-slide-to="0">
                    </div>
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="/images/show_page_images/example_riem_02.png"
                        alt="example_belt_02" data-target="#carouselExample" data-slide-to="1">
                    </div>
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="/images/show_page_images/example_riem_03.png"
                        alt="example_belt_03" data-target="#carouselExample" data-slide-to="2">
                    </div>
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="/images/show_page_images/example_riem_04.png"
                        alt="example_belt_04" data-target="#carouselExample" data-slide-to="3">
                    </div>

                    <button class="btn btn-mau atc-btn shadow-mau">Add to Cart</button>
                </div>



            {{-- PRODUCT INFO DIV --}}
            {{-- PRODUCT INFO DIV --}}
                <div class="sp_left_div2 d-flex justify-content-center align-items-center row">
                    <h1 class="text-center text-white col-12 title-font"> Product Info </h1>
                    <div class="sp_left_div2_inner d-flex justify-content-center align-items-center shadow-mau row">
                        <div class="col-12 d-flex justify-content-center row align-items-center">
                            <h2 class="text-center text-white title-font col-12">Product Name</h2>
                            <div class="product_name_underline"></div>
                        </div>
                        <div class="col-12">
                            <h3 class="text-center text-white text-font">Product Tagline</h3>
                        </div>
                        <div class="col-12">
                            <h3 class="text-center text-white text-font">Description</h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center text-white text-font">Stock</h3> <h3 class="text-center text-white text-font"> 22 </h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center text-white text-font">Product Price</h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center text-white text-font">Strap Color</h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center text-white text-font">Size</h3>
                        </div>
                    </div>
                </div>



            {{-- PRODUCT REVIEW DIV --}}
            {{-- PRODUCT REVIEW DIV --}}
                <div class="sp_left_div3 d-flex justify-content-center align-items-center row">
                    <h1 class="text-white text-center col-12 mb-4 title-font"> Reviews </h1>
                    <div class="div3_review_div col-12 shadow-mau"></div>
                    <div class="div3_review_div col-12 shadow-mau"></div>
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
