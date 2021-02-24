@extends('layout')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class="row profile_page_main d-flex justify-content-center align-items-center">
        <div class="col profile_page_div1 row">

            {{-- LEFT HALF PROFILE PAGE --}}
            {{-- LEFT HALF PROFILE PAGE --}}
            <div class="profile_page_lefthalf justify-content-center align-items-center col-md">
                <div class="ppl_top d-flex justify-content-center align-items-center row">
                        <h3 class="text-white text-center title-font">Naam: {{ $user->first_name . " " . $user->last_name }}</h3>
                        <div class="profile_underline"></div>
                        <h4 class="text-white text-left title-font col-6">E-mail: {{ $user->email }}</h4>
                        <h4 class="text-white text-left title-font col-6">Adres: {{ $user->address }}</h4>
                        <h4 class="text-white text-left title-font col-6">Stad: {{ $user->city }}</h4>
                        <h4 class="text-white text-left title-font col-6">Postcode: {{ $user->postal_code }}</h4>
                        <h4 class="text-white text-left title-font col-6">Website: {{ $user->website }}</h4>
                        <h4 class="text-white text-left title-font col-6">Telefoonnummer: {{ $user->phone_number }}</h4>
                        <h4 class="text-white text-left title-font col-6">Bedrijfsnaam: {{ $user->company_name }}</h4>
                        <a href="{{ route('profile.edit')}}"><button class="btn btn-mau shadow-mau pp_edit_btn1">Edit</button></a>
                </div>


                {{-- PROFILE PROGRESSION TRACKER --}}
                {{-- PROFILE PROGRESSION TRACKER --}}
                <div class="ppl_bot d-flex justify-content-center align-items-center col">
                    <div class="profile_info_block1 d-flex justify-content-center align-items-center row">
                        <h3 class="text-white text-center title-font col-12">Total Orders</h3>
                        <div class="profile_block_underline"></div>
                        <h4 class="text-white text-center title-font col-12">4</h4>
                    </div>

                    <div class="profile_info_block1 d-flex justify-content-center align-items-center row">
                        <h3 class="text-white text-center title-font col-12">Total Posts</h3>
                        <div class="profile_block_underline"></div>
                        <h4 class="text-white text-center title-font col-12">0</h4>
                    </div>

                    <div class="profile_info_block1 d-flex justify-content-center align-items-center row">
                        <h3 class="text-white text-center title-font col-12">Reviews</h3>
                        <div class="profile_block_underline"></div>
                        <h4 class="text-white text-center title-font col-12">0</h4>
                    </div>
                </div>


                <a href="/"><button class="btn btn-mau shadow-mau profile_btn_pc">Back</button></a>


            </div>

            {{-- RIGHT HALF PROFILE PAGE --}}
            {{-- RIGHT HALF PROFILE PAGE --}}
            <div class="profile_page_righthalf col-md">

                <div class="ppr_1 d-flex align-items-center justify-content-center">
                        <img class="ppr_1_img" src="/images/landing_page_images/example_belt_01.jpg" alt="image of black leather belt">
                        <div>
                            <h3 class="text-white text-left title-font">Black Styled Belt L</h3>
                            <h4 class="text-white text-left title-font">Shipped on 23/02/2021</h4>
                        </div>
                </div>

                <div class="ppr_2 d-flex align-items-center justify-content-center">
                    <img class="ppr_1_img" src="/images/landing_page_images/example_belt_01.jpg" alt="image of black leather belt">
                    <div>
                        <h3 class="text-white text-left title-font">Black Styled Belt L</h3>
                        <h4 class="text-white text-left title-font">Shipped on 23/02/2021</h4>
                    </div>
                </div>

                <div class="ppr_2 d-flex align-items-center justify-content-center">
                    <img class="ppr_1_img" src="/images/landing_page_images/example_belt_01.jpg" alt="image of black leather belt">
                    <div>
                        <h3 class="text-white text-left title-font">Black Styled Belt L</h3>
                        <h4 class="text-white text-left title-font">Shipped on 23/02/2021</h4>
                    </div>
                </div>

            <a href="/" class="profile_btn_mob"><button class="btn btn-mau shadow-mau">Back</button></a>
        </div>
    </div>

</div>

@endsection
