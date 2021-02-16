@extends ('layout')

@section('content')
        {{-- Start screen div with Button in the middle --}}
        {{-- Start screen div with Button in the middle --}}
        <div class="container-fluid start_screen_div d-flex justify-content-center align-items-center">
            <p>
                <button class="btn btn-warning">HELLO</button>
            </p>
        </div>


        <div class="space_divs"></div>

        {{-- Product intro with buy options in 4 squares --}}
        {{-- Product intro with buy options in 4 squares --}}
        <div class="container-fluid product_intro_4square_div d-flex justify-content-center align-items-center flex-column">
            <div class="product_intro_4square_content_div1 mb-5">
                <p class="text-white pi4cd_text product_intro_text text-center row aln-center col-4 col-6-medium">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Odit sapiente molestias quos asperiores. Doloremque, dignissimos quasi.
                    Recusandae consequuntur rerum ab laudantium, voluptate sapiente eligendi distinctio ducimus temporibus.
                     Omnis, quidem adipisci!
                </p>
            </div>
            <div class="product_intro_4square_content_div2 row aln-center d-flex align-items-center">
                <div class="product_intro_squaredivs1 m-1 col"><button class="btn squarediv_btn btn-danger">Buy</button></div>
                <div class="product_intro_squaredivs2 m-1 col"><button class="btn squarediv_btn btn-danger">Buy</button></div>
                <div class="product_intro_squaredivs3 m-1 col"><button class="btn squarediv_btn btn-danger">Buy</button></div>
                <div class="product_intro_squaredivs4 m-1 col"><button class="btn squarediv_btn btn-danger">Buy</button></div>
            </div>
        </div>


        <div class="space_divs"></div>

        {{-- Big Double Divs Picture Left side --}}
        {{-- Big Double Divs Picture Left side --}}
        <div class="container-fluid big_double_divs_pic_left d-flex justify-content-center align-items-center row">
            <div class="bddpl_div1 d-flex align-items-center justify-content-center m-1 col-md">
                Picture
            </div>
            <div class="bddpl_div2 d-flex align-items-center justify-content-center m-1 col-md">
                <p class="text-white bddpl_div2_txt text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Porro necessitatibus hic enim nostrum eveniet quis accusantium aliquam velit recusandae provident cum ad eaque officia laboriosam,
                    at consectetur, id pariatur assumenda?
                </p>
            </div>
        </div>


        <div class="space_divs"></div>

        {{-- Big Double Divs Picture Right side --}}
        {{-- Big Double Divs Picture Right side --}}
        <div class="container-fluid big_double_divs_pic_right d-flex justify-content-center align-items-center row">
            <div class="bddpr_div2 d-flex align-items-center justify-content-center m-1 col-md">

                <p class="bddpr_div2_txt text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Porro necessitatibus hic enim nostrum eveniet quis accusantium aliquam velit recusandae provident cum ad eaque officia laboriosam,
                    at consectetur, id pariatur assumenda?
                </p>
            </div>
            <div class="bddpr_div1 d-flex align-items-center justify-content-center m-1 col-md">
                Picture
            </div>
        </div>


        <div class="space_divs"></div>

        {{-- Review Section Front Page --}}
        {{-- Review Section Front Page --}}
        <div class="container-fluid review_section_frontpage_div d-flex justify-content-center align-items-center row">
            <div class="rsf_div1 d-flex align-items-center justify-content-center col-md-6 col-xs-12">

                <p class="text-white rsf_div1_txt text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Et debitis iste est quis itaque quod fugit, rerum voluptatem maxime voluptates!
                        Dolorum veritatis saepe nihil quam blanditiis sit, quod sunt soluta?
                        <button class="btn rsf_div1_btn btn-success mx-auto">Button</button>
                </p>

            </div>

            <div class="rsf_div2 d-flex row aln-center d-flex align-items-center col-md-6 col-xs-12">
                <div class="rsf_div2_box1 col-5 mx-auto text-center col-xs-12">
                    <h2>*****</h2>
                    <p>______________________________________</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                         Cumque, tempora at. Reprehe nisi,
                         facere doloribus sint perspiciatis maiores
                         quae quia nesciunt nihil adipisci dignissimos doloremque
                         blanditiis voluptatibus.</p>
                </div>
                <div class="rsf_div2_box2 col-5 mx-auto text-center col-xs-12">
                    <h2>*****</h2>
                    <p>______________________________________</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                         Cumque, tempora at. Reprehe nisi,
                         facere doloribus sint perspiciatis maiores
                         quae quia nesciunt nihil adipisci dignissimos doloremque
                         blanditiis voluptatibus.</p>
                </div>
                <div class="rsf_div2_box3 col-5 mx-auto text-center col-xs-12">
                    <h2>*****</h2>
                    <p>______________________________________</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                         Cumque, tempora at. Reprehe nisi,
                         facere doloribus sint perspiciatis maiores
                         quae quia nesciunt nihil adipisci dignissimos doloremque
                         blanditiis voluptatibus.</p>
                </div>
                <div class="rsf_div2_box4 col-5 mx-auto text-center col-xs-12">
                    <h2>*****</h2>
                    <p>______________________________________</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                         Cumque, tempora at. Reprehe nisi,
                         facere doloribus sint perspiciatis maiores
                         quae quia nesciunt nihil adipisci dignissimos doloremque
                         blanditiis voluptatibus.</p>
                </div>
            </div>
        </div>


        <div class="space_divs"></div>

        {{-- Main Page Footer with Links--}}
        {{-- Main Page Footer with Links--}}
        <div class="container-fluid main_page_footer_with_links d-flex justify-content-center row">
            <h2 class="text-white">Footer</h2>
            <div class="col-md-3 mt-3">
                <h3 class="text-white">Category</h3>
                <ul class="text-white">
                    <li class="">Bunch of links</li>
                    <li class="">That totally belong here</li>
                    <li class="">And which are always</li>
                    <li class="">Super valuable and Totally Important</li>
                    <li class="">Peanutbutter Jelly Sandwich</li>
                </ul>
            </div>
            <div class="col-md-3 mt-3">
                <h3 class="text-white">Social Media</h3>
                <ul class="text-white row">
                    <div class="socialmedia_divs m-2 btn"></div>
                    <div class="socialmedia_divs m-2 btn"></div>
                    <div class="socialmedia_divs m-2 btn"></div>
                </ul>
            </div>
            <div class="col-md-3 mt-3">
                <h3 class="text-white">Contact</h3>
                <ul class="text-white">
                    <li class="">help@rmx.com</li>
                    <li class="">0800-rmx-404</li>
                </ul>
            </div>
        </div>




        <div class="space_divs"></div>

@endsection


