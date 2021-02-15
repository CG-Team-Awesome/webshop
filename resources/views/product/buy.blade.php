@extends('layout')

@section('content')

    <div class="container-fluid buy_page_container_div d-flex justify-content-center row">


        {{-- BUY PAGE MOST LEFT DIV --}}
        {{-- BUY PAGE MOST LEFT DIV --}}
        <div class="col-md-3 bp_div1 d-flex justify-content-center row">
            <div class="bp_div1_cart d-flex justify-content-center align-items-center">
                <p class="text-white text-center">CART</p>
            </div>
            <div class="bp_div1_img"></div>
            <a href="/"><button class="btn bp_btn_back1 btn-primary">Back</button></a>
        </div>


        {{-- BUY PAGE MIDDLE DIV --}}
        {{-- BUY PAGE MIDDLE DIV --}}
        <div class="col-md-6 bp_div2 d-flex justify-content-center row">
            <div class="bp_div2_tracker"></div>
            <div class="bp_div2_info d-flex align-items-center justify-content-center">
                <p class="text-white text-center">Name and info of product</p>
            </div>
            <div class="bp_div2_discount d-flex align-items-center justify-content-center">
                <p class="text-white text-center">Coupon / Discount Code</p>
            </div>
        </div>



        {{-- BUY PAGE RIGHT DIV --}}
        {{-- BUY PAGE RIGHT DIV --}}
        <div class="col-md-3 bp_div3 d-flex justify-content-center row">
            <div class="bp_div3_total d-flex justify-content-center align-items-center">
                <p class="text-white text-center">
                    Products <br>
                    Shipping <br>
                    Tax <br>
                    <br>
                    <br>
                    Total
                </p>
            </div>
            <div class="bp_div3_cont d-flex align-items-center justify-content-center">
                <a href="/buy2" class="btn">
                    <p class="text-white btn text-center">
                        Continue >>
                    </p>
                </a>

            </div>
            <a href="/"><button class="btn bp_btn_back2 btn-primary">Back</button></a>
        </div>



    </div>

@endsection
