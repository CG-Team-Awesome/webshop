@extends('layout')

@section('content')

<div class="show_page_outer-wrapper">
    <div class="show_page_inner-wrapper">

        {{-- SHOW PAGE LEFT HALF --}}
        {{-- SHOW PAGE LEFT HALF --}}
    <div class="sp_slide sp_lefthalf d-flex justify-content-center align-items-center">

            <a href="/"><button class="btn btn-primary btn-showpage1">Back</button></a>
            {{-- PRODUCT PICTURE DIV --}}
            {{-- PRODUCT PICTURE DIV --}}
                <div class="sp_left_div1 d-flex justify-content-center align-items-center">
                    <p class="text-center text-white"> Pictures </p>
                </div>

            {{-- PRODUCT INFO DIV --}}
            {{-- PRODUCT INFO DIV --}}
                <div class="sp_left_div2 d-flex justify-content-center align-items-center">
                    <p class="text-center text-white"> Product Info </p>
                </div>

            {{-- PRODUCT REVIEW DIV --}}
            {{-- PRODUCT REVIEW DIV --}}
                <div class="sp_left_div3 d-flex justify-content-center align-items-center row">
                    <h1 class="text-white text-center col-12 mb-4"> Reviews </h1>
                    <div class="div3_review_div col-12"></div>
                    <div class="div3_review_div col-12"></div>
                    <button class="btn btn-success btn-review">+</button>
                    <a href="/"><button class="btn btn-primary btn-showpage2">Back</button></a>
                </div>
    </div>


        {{-- SHOW PAGE RIGHT HALF --}}
        {{-- SHOW PAGE RIGHT HALF --}}
      <div class="sp_slide sp_righthalf">

      </div>
    </div>
  </div>

@endsection
