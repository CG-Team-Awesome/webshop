@extends('layout')

@section('content')

    <div class="container-fluid buy_page_container_div d-flex justify-content-center row">


        {{-- BUY PAGE MOST LEFT DIV --}}
        {{-- BUY PAGE MOST LEFT DIV --}}
        <div class="col-md-3 bp_div1 d-flex justify-content-center row">
            <div class="bp_div1_cart d-flex justify-content-center align-items-center">
                <h1 class="text-white text-center title-font">CART</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <img class="bp_div1_img" src="/images/show_page_images/example_riem_01.png" alt="example_belt_01">
            </div>
            <a href="/"><button class="btn bp_btn_back1 btn-mau shadow-mau">Back</button></a>
        </div>


        {{-- BUY PAGE MIDDLE DIV --}}
        {{-- BUY PAGE MIDDLE DIV --}}
        <div class="col-md-6 bp_div2 d-flex justify-content-center row">
            <div class="bp_div2_tracker d-flex justify-content-center align-items-center">
                <img src="/images/buy_page_images/number1.svg" class="number1-icon" alt="number1 svg">
                <img src="/images/buy_page_images/dashedline.svg" class="dashedline-icon" alt="dashedline svg">
                <img src="/images/buy_page_images/dashedline.svg" class="dashedline-icon" alt="dashedline svg">
                <img src="/images/buy_page_images/dashedline.svg" class="dashedline-icon" alt="dashedline svg">
                <img src="/images/buy_page_images/number2.svg" class="number2-icon" alt="number2 svg">
            </div>

            <div class="bp_div2_info d-flex align-items-center justify-content-center">
                <div class="bp_div2_info_inner d-flex justify-content-center row">
                    <h3 class="text-white text-center title-font mt-3 col-12">
                        Product Name
                    </h3>
                    <div class="product_name_underline_buy"></div>
                    <p class="text-white text-center text-font col-12">
                        Product Description
                    </p>
                </div>
            </div>

            <div class="bp_div2_discount d-flex align-items-center justify-content-center">
                <div class="bp_div2_discount_inner d-flex align-items-center justify-content-center">
                    <h3 class="text-white text-center title-font mr-3">Enter Discount Code</h3>
                    <input class="text-white text-center title-font discount_code" type="text" style="text-transform:uppercase" maxlength="6" minlength="4">
                </div>
            </div>
        </div>



        {{-- BUY PAGE RIGHT DIV --}}
        {{-- BUY PAGE RIGHT DIV --}}
        <div class="col-md-3 bp_div3 d-flex justify-content-center row">
            <div class="bp_div3_total d-flex justify-content-center align-items-center">
                <div class="bp_div3_total_inner">
                    <p class="d-flex justify-content-center">
                        <h6 class="text-white text-center">Black Styled Belt L</h6><h6 class="text-white text-center">€45,-</h6>

                        <h6 class="text-white text-center">Shipping</h6><h6 class="text-white text-center">€2,-</h6>

                        <h6 class="text-white text-center">Tax</h6><h6 class="text-white text-center">€9.87</h6>
                        <h5 class="text-white text-center mb-1">_ _ _ _ _ _ _ _ _ _ _ _</h5>
                        <h4 class="text-white text-center mt-3">Total</h4><h4 class="text-white text-center">€56.87</h4>
                    </p>
                </div>

            </div>
                <a href="/buy2" class="btn">
                    <button class="bp_div3_cont btn btn-mau shadow-mau">Continue</button>
                </a>
            <a href="/"><button class="btn bp_btn_back2 btn-mau shadow-mau">Back</button></a>
        </div>



    </div>

@endsection
