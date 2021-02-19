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
                <div class="sp_left_div1 d-flex justify-content-center align-items-center row">
                    <h1 class="text-center text-white col-12 title-font"> Pictures </h1>
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="/images/show_page_images/example_riem_01.png" alt="example_belt_01">
                    </div>
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="/images/show_page_images/example_riem_02.png" alt="example_belt_02">
                    </div>
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="/images/show_page_images/example_riem_03.png" alt="example_belt_03">
                    </div>
                    <div class="sp_left_div1_container d-flex justify-content-center align-items-center">
                        <img class="sp_left_div1_img" src="/images/show_page_images/example_riem_04.png" alt="example_belt_04">
                    </div>
                </div>

            {{-- PRODUCT INFO DIV --}}
            {{-- PRODUCT INFO DIV --}}
                <div class="sp_left_div2 d-flex justify-content-center align-items-center">
                    <p class="text-center text-white"> Product Info </p>
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
