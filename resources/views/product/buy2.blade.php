@extends('layout')

@section('content')

    <div class="container-fluid buy_page_container_div d-flex justify-content-center row">


        {{-- BUY PAGE PT2 MOST LEFT DIV --}}
        {{-- BUY PAGE PT2 MOST LEFT DIV --}}
        <div class="col-md-3 bp_div1_pt2 d-flex justify-content-center row">
            <div class="bp_div1_cart_pt2 d-flex justify-content-center align-items-center">
                <p class="text-white text-center">CART</p>
            </div>
            <div class="bp_div1_img_pt2"></div>
            <a href="/buy"><button class="btn bp_btn_back1_pt2 btn-primary">Back</button></a>
        </div>


        {{-- BUY PAGE PT2 MIDDLE DIV --}}
        {{-- BUY PAGE PT2 MIDDLE DIV --}}
        <div class="col-md-6 bp_div2_pt2 d-flex justify-content-center row">
            <div class="bp_div2_tracker_pt2"></div>
            <div class="bp_div2_info_pt2 d-flex align-items-center justify-content-center">
                <p class="text-white text-center">
                    Payment options <br>
                    and actual payment
                </p>
            </div>
            <div class="bp_div2_delivery_pt2 d-flex align-items-center justify-content-center">
                <p class="text-white text-center">
                    Expected delivery info
                </p>
            </div>
        </div>



        {{-- BUY PAGE PT2 RIGHT DIV --}}
        {{-- BUY PAGE PT2 RIGHT DIV --}}
        <div class="col-md-3 bp_div3_pt2 d-flex justify-content-center row">

            <div class="bp_div3_cont_pt2 d-flex align-items-center justify-content-center">
                <a href="/congrats" class="btn">
                    <p class="text-white btn text-center">
                        Buy >>
                    </p>
                </a>

            </div>
            <a href="/buy"><button class="btn bp_btn_back2_pt2 btn-primary">Back</button></a>
        </div>



    </div>

@endsection
