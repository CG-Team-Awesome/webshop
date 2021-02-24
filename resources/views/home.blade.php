@extends ('layout')

@section('content')


{{-- NEW TOP DIV WITH LOGO --}}
{{-- NEW TOP DIV WITH LOGO --}}
<div class="container-fluid new_home_top_div d-flex justify-content-center align-items-center row">

    <h1 class="title-font text-white text-center m-2">MAXIRU</h1>
    <h2 class="title-font text-center m-2"><span class="text-white">MAX</span> your style.</h2>

</div>



<div class="space_divs"></div>
{{-- Start screen div with Button in the middle --}}
{{-- Start screen div with Button in the middle --}}

<div class="container-fluid start_screen_div d-flex justify-content-center align-items-center row">

    <p class="title-font text-center text-white col-12 fade-in">
        Check out our <span class="spring-color">SPRING</span> collection.
    </p>
    <a class="" href="{{ Route('product.index') }}"><button
            class="btn mx-auto btn-mau shadow-mau btn-browse">Browse</button></a>

</div>


<div class="space_divs"></div>

{{-- Product intro with buy options in 4 squares --}}
{{-- Product intro with buy options in 4 squares --}}
<div class="container-fluid product_intro_4square_div d-flex justify-content-center align-items-center flex-column">
    <div class="product_intro_4square_content_div1 mb-5 fade-in">
        <p class="text-white pi4cd_text product_intro_text text-center row aln-center col-4 col-6-medium text-font">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Odit sapiente molestias quos asperiores. Doloremque, dignissimos quasi.
            Recusandae consequuntur rerum ab laudantium, voluptate sapiente eligendi distinctio ducimus temporibus.
            Omnis, quidem adipisci!
        </p>
    </div>
    <div class="product_intro_4square_content_div2 row aln-center d-flex align-items-center">
        @foreach ($products as $product)
        <div class="product_intro_squaredivs1 shadow-mau m-1 col" style="background-image:url('{{ $product->images->first()->url }}')"><a
                href="{{ Route('product.show', $product->id) }}"><button
                    class="btn squarediv_btn btn-mau shadow-mau">Buy</button></a></div>
        @endforeach
        {{-- <div class="product_intro_squaredivs1 shadow-mau m-1 col"><a href="{{ Route('product.show','1') }}"><button
            class="btn squarediv_btn btn-mau shadow-mau">Buy</button></a></div>
    <div class="product_intro_squaredivs2 shadow-mau m-1 col"><a href="{{ Route('product.show','1') }}"><button
                class="btn squarediv_btn btn-mau shadow-mau">Buy</button></a></div>
    <div class="product_intro_squaredivs3 shadow-mau m-1 col"><a href="{{ Route('product.show','1') }}"><button
                class="btn squarediv_btn btn-mau shadow-mau">Buy</button></a></div>
    <div class="product_intro_squaredivs4 shadow-mau m-1 col"><a href="{{ Route('product.show','1') }}"><button
                class="btn squarediv_btn btn-mau shadow-mau">Buy</button></a></div> --}}
</div>
</div>


<div class="space_divs2"></div>

{{-- Big Double Divs Picture Left side --}}
{{-- Big Double Divs Picture Left side --}}
<div class="container-fluid big_double_divs_pic_left d-flex justify-content-center align-items-center row">
    <div class="bddpl_div1 d-flex align-items-center justify-content-center m-1 col-md">
    </div>
    <div class="bddpl_div2 d-flex align-items-center justify-content-center m-1 col-md">
        <p class="text-white bddpl_div2_txt text-center text-font fade-in">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Porro necessitatibus hic enim nostrum eveniet quis accusantium aliquam velit recusandae provident cum ad
            eaque officia laboriosam,
            at consectetur, id pariatur assumenda?
        </p>
    </div>
</div>


<div class="space_divs"></div>

{{-- Big Double Divs Picture Right side --}}
{{-- Big Double Divs Picture Right side --}}
<div class="container-fluid big_double_divs_pic_right d-flex justify-content-center align-items-center row">
    <div class="bddpr_div2 d-flex align-items-center justify-content-center m-1 col-md">

        <p class="bddpr_div2_txt text-center text-font text-white fade-in">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Porro necessitatibus hic enim nostrum eveniet quis accusantium aliquam velit recusandae provident cum ad
            eaque officia laboriosam,
            at consectetur, id pariatur assumenda?
        </p>
    </div>
    <div class="bddpr_div1 d-flex align-items-center justify-content-center m-1 col-md">

    </div>
</div>


<div class="space_divs2"></div>

{{-- Review Section Front Page --}}
{{-- Review Section Front Page --}}
<div
    class="container-fluid review_section_frontpage_div d-flex justify-content-center align-items-center row shadow-mau">
    <div class="rsf_div1 d-flex align-items-center justify-content-center col-md-6 col-xs-12">

        <p class="text-white rsf_div1_txt text-center text-font fade-in">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Et debitis iste est quis itaque quod fugit, rerum voluptatem maxime voluptates!
            Dolorum veritatis saepe nihil quam blanditiis sit, quod sunt soluta?
            <button class="btn rsf_div1_btn btn-mau mx-auto shadow-mau">Button</button>
        </p>

    </div>

    <div class="rsf_div2 d-flex row aln-center d-flex align-items-center col-md-6 col-xs-12">
        @foreach ($reviews as $review)
        <div class="rsf_div2_box1 col-5 mx-auto text-center col-xs-12 text-font shadow-mau">
            <h2>
                @for ($i=0;$i<$review->rating;$i++)
                    *
                    @endfor
            </h2>
            <p>______________________________________</p> {{-- // TODO Maurice, change into <hr /> or something --}}
            <p>{{ $review->review }}</p>
        </div>
        @endforeach
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




<script>
    const faders = document.querySelectorAll('.fade-in');

    const appearOptions = {
        threshold: 0,
        rootMargin: "0px 0px -250px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function(
        entries,
        appearOnScroll
    ) {
    entries.forEach(entry => {
        if (!entry.isIntersecting)
        {
            return;
        } else {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
        }
    });
    }, appearOptions);
        faders.forEach(fader => {
        appearOnScroll.observe(fader);
    });
</script>

@endsection
