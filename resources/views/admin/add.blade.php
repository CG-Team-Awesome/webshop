@extends('layout')

@section('content')


<div class="container-fluid adm_pa_main">

    <h1 class="adminh1 text-center">ADMIN PAGE -- Add Product</h1>
    <div class="adm_pa_div1 d-flex justify-content-center align-items-center row">
        <form>
            <div class="form-group">
              <label for="product_title">Product Title</label>
              <input type="text" class="form-control" id="product_title" placeholder="RMX Black Leather M">
            </div>
            <div class="form-group">
                <label for="product_description">Product Description</label>
                <textarea class="form-control" id="product_description" rows="3"></textarea>
              </div>
            <div class="form-group">
              <label for="starting_stock">Starting Stock</label>
              <select class="form-control" id="starting_stock">
                <option>10</option>
                <option>20</option>
                <option>30</option>
                <option>40</option>
                <option>50</option>
              </select>
            </div>
            <div class="form-group">
                <label for="image_uploader">Upload Images</label>
                <input type="file" class="form-control-file" id="image_uploader" multiple>
            </div>
            <button class="btn btn-success btn-adm-addpd">Add Product</button>
            <a href="/admin/productlist"><button class="btn btn-warning btn-adm-cancelpd2">Cancel</button></a>
          </form>
            <a href="/admin/productlist"><button class="btn btn-warning btn-adm-cancelpd">Cancel</button></a>
    <div>
</div>


@endsection
