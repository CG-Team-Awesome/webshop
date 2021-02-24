@extends('layout')

@section('content')

    <div class="container-fluid buy_page_container_div d-flex justify-content-center row">


        {{-- BUY PAGE PT2 MOST LEFT DIV --}}
        {{-- BUY PAGE PT2 MOST LEFT DIV --}}
        <div class="col-md-3 bp_div1_pt2 d-flex justify-content-center row">
            <div class="bp_div1_cart_pt2 d-flex justify-content-center align-items-center">
                <h1 class="text-white text-center title-font">CART</h1>
            </div>
                <div class="d-flex justify-content-center align-items-center">
                    <img class="bp_div1_img_pt2" src="/images/show_page_images/example_riem_01.png" alt="example_belt_01">
                </div>
            <a href="/buy"><button class="btn bp_btn_back1_pt2 btn-mau shadow-mau">Back</button></a>
        </div>


        {{-- BUY PAGE PT2 MIDDLE DIV --}}
        {{-- BUY PAGE PT2 MIDDLE DIV --}}
        <div class="col-md-6 bp_div2_pt2 d-flex justify-content-center row">
            <div class="bp_div2_tracker_pt2 d-flex justify-content-center align-items-center">
                <img src="/images/buy_page_images/number1.svg" class="number1-icon-pt2" alt="number1 svg">
                <img src="/images/buy_page_images/dashedline.svg" class="dashedline-icon-pt2" alt="dashedline svg">
                <img src="/images/buy_page_images/dashedline.svg" class="dashedline-icon-pt2" alt="dashedline svg">
                <img src="/images/buy_page_images/dashedline.svg" class="dashedline-icon-pt2" alt="dashedline svg">
                <img src="/images/buy_page_images/number2.svg" class="number2-icon-pt2" alt="number2 svg">
            </div>
            <div class="bp_div2_info_pt2 d-flex align-items-center justify-content-center">
                <div class="bp_div2_info_inner_pt2 d-flex justify-content-center row">
                    <h3 class="text-white text-center title-font mt-3 col-12">
                        Payment options
                    </h3>
                    <div class="product_name_underline_buy_pt2"></div>
                    <div class="col-12 d-flex justify-content-center align-items-center mb-5">
                        <img src="/images/buy_page_images/ideal-logo.svg" class="ideal-icon" alt="ideal logo svg">
                        <img src="/images/buy_page_images/bitcoin.svg" class="bitcoin-icon" alt="bitcoin logo svg">
                    </div>
                </div>
            </div>
            <div class="bp_div2_delivery_pt2 d-flex align-items-center justify-content-center">
                <div class="bp_div2_delivery_pt2_inner d-flex justify-content-center row">
                    <h3 class="text-white text-center title-font mt-3 col-12">
                        Expected Delivery Date
                    </h3>
                    <div class="expected_delivery_underline"></div>
                    <h4 class="text-white text-center title-font col-12">
                        Whatever date it is currently +4
                    </h4>
                </div>
            </div>
        </div>



        {{-- BUY PAGE PT2 RIGHT DIV --}}
        {{-- BUY PAGE PT2 RIGHT DIV --}}
        <div class="col-md-3 bp_div3_pt2 d-flex justify-content-center row">

            <div class="d-flex align-items-center justify-content-center">
                <a href="/congrats" class="btn">
                    <button class="btn btn-mau shadow-mau bp_div3_cont_pt2">Buy >></button>
                </a>

            </div>
            <a href="/buy"><button class="btn bp_btn_back2_pt2 btn-mau shadow-mau">Back</button></a>
        </div>



    </div>

@endsection
