@extends('layout')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class="row profile_page_main d-flex justify-content-center align-items-center">
        <div class="col profile_page_div1 row">

            {{-- LEFT HALF PROFILE PAGE --}}
            {{-- LEFT HALF PROFILE PAGE --}}
            <div class="profile_page_lefthalf justify-content-center align-items-center col-md">
                <div class="ppl_top d-flex justify-content-center align-items-center col">
                    <div class="ppl_top_image_placeholder">PICTURE</div>
                    <div class="text-center">
                        <ul class="text-white">
                            <li class="text-white">Name</li>
                            <li class="text-white">Age</li>
                            <li class="text-white">Address</li>
                            <li class="text-white">City</li>
                            <li class="text-white">Email</li>
                        </ul>
                    </div>
                    <a href="/edit"><button class="btn btn-warning pp_edit_btn1">Edit</button></a>
                </div>
                <div class="ppl_bot d-flex justify-content-center align-items-center col">
                    <div class="col">Total Orders</div>
                    <div class="col">Total Posts</div>
                    <div class="col">Reviews</div>
                </div>
                <a href="/"><button class="btn btn-primary profile_btn_pc">Back</button></a>


            </div>

            {{-- RIGHT HALF PROFILE PAGE --}}
            {{-- RIGHT HALF PROFILE PAGE --}}
            <div class="profile_page_righthalf col-md">
                <div class="ppr_1 col d-flex align-items-center">
                    <div class="ppr_1_img"></div>
                    <div class="ppr_1_txt">
                        Recent Order
                        <br>
                        Shipping Info
                    </div>
                </div>
                <div class="ppr_2 col d-flex align-items-center">
                    <div class="ppr_2_img"></div>
                    <div class="ppr_2_txt">
                        Recent Order
                        <br>
                        Shipping Info
                    </div>
                </div>
                <div class="ppr_3 col d-flex align-items-center">
                    <div class="ppr_3_img"></div>
                    <div class="ppr_3_txt">
                        Recent Order
                        <br>
                        Shipping Info
                    </div>
                </div>
            </div>
            <a href="/"><button class="btn btn-primary profile_btn_mob">Back</button></a>


        </div>
    </div>

</div>

@endsection
