@extends('layout')

@section('content')
<div class="container-fluid adm_ps_main">

    <h1 class="adminh1 text-center">ADMIN PAGE -- Show/Edit/Update Product</h1>
    <div class="adm_ps_div1 d-flex justify-content-center align-items-center row">
        {{-- LEFT HALF ADMIN SHOW PAGE --}}
        {{-- LEFT HALF ADMIN SHOW PAGE --}}
        <form class="col-6">
            <div class="form-group">
              <label for="product_title">Product Title</label>
              <input type="text" class="form-control" id="product_title" placeholder="RMX Black Leather M">
            </div>
            <div class="form-group">
                <label for="product_description">Product Description</label>
                <textarea class="form-control" id="product_description" rows="3"></textarea>
              </div>
            <div class="form-group">
              <label for="starting_stock">Current Stock</label>
              <p>25</p>
            </div>
            <div class="form-group">
                <label for="image_uploader">Upload Images</label>
                <input type="file" class="form-control-file" id="image_uploader" multiple>
            </div>
            <button class="btn btn-danger btn-adm-editpd">Delete</button>
          </form>
        <a href="/admin/productlist"><button class="btn btn-warning btn-adm-cancelpd">Cancel</button></a>


        {{-- RIGHT HALF ADMIN SHOW PAGE --}}
        {{-- RIGHT HALF ADMIN SHOW PAGE --}}
       <div class="col-6 righthalf_asp">
           <div class="adm_sp_reviewdiv1 row d-flex align-items-center">
               <div class="col-6 fs-1">*****</div>
               <div class="col-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores deleniti explicabo, atque illo placeat ab doloremque! Similique odit neque molestiae.</div>
            <button class="btn btn-danger btn-adm-rv">X</button>
           </div>
           <div class="adm_sp_reviewdiv2 row d-flex align-items-center">
            <div class="col-6 fs-1">*****</div>
            <div class="col-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores deleniti explicabo, atque illo placeat ab doloremque! Similique odit neque molestiae.</div>
            <button class="btn btn-danger btn-adm-rv">X</button>
           <button class="btn btn-success btn-adm-rv-confirm">Confirm</button>
       </div>

    <div>
</div>
@endsection
