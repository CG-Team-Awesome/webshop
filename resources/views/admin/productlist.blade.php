@extends('layout')

@section('content')


<div class="container-fluid adm_pi_main">
        <h1 class="adminh1 text-center">ADMIN PAGE -- Product List</h1>
            <div class="d-flex justify-content-center align-items-center row">
                <a href="/admin/add"><button class="btn btn-success btn-addproduct">+</button></a>
                    <a href="/admin/show"><div class="productinfo_div1 d-flex align-items-center btn">
                        <div class="productinfo_div1_img">Picture</div>
                        <h2 class="ml-1 productinfo_h2">ProductName</h2>
                        <h2 class="ml-5 productinfo_h2">Stock: 12</h2>
                        <h2 class="ml-5 productinfo_h2">Units sold: 58</h2>
                    </div>
                    </a>

                    <div class="productinfo_div2 d-flex align-items-center btn">
                        <div class="productinfo_div1_img">Picture</div>
                        <h2 class="ml-1 productinfo_h2">ProductName</h2>
                        <h2 class="ml-5 productinfo_h2">Stock: 18</h2>
                        <h2 class="ml-5 productinfo_h2">Units sold: 4</h2>
                    </div>
                    <div class="productinfo_div3 d-flex align-items-center btn">
                        <div class="productinfo_div1_img">Picture</div>
                        <h2 class="ml-1 productinfo_h2">ProductName</h2>
                        <h2 class="ml-5 productinfo_h2">Stock: 72</h2>
                        <h2 class="ml-5 productinfo_h2">Units sold: 44</h2>
                    </div>
                    <div class="productinfo_div4 d-flex align-items-center btn">
                        <div class="productinfo_div1_img">Picture</div>
                        <h2 class="ml-1 productinfo_h2">ProductName</h2>
                        <h2 class="ml-5 productinfo_h2">Stock: 63</h2>
                        <h2 class="ml-5 productinfo_h2">Units sold: 23</h2>
                    </div>
            </div>
</div>



@endsection
