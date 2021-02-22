@extends('layout')

@section('content')


<div class="container-fluid adm_pa_main">

    <h1 class="adminh1 text-center">ADMIN PAGE -- Add Product</h1>
    <div class="adm_pa_div1 d-flex justify-content-center align-items-center row">
        <form>
            <div class="form-group">
                <label for="product_category">Product Category</label>
                <select class="form-control" id="product_category">
                    <option value="1">horloges</option>
                    <option value="2">riemen</option>
                  </select>
              </div>
            <div class="form-group">
              <label for="product_title">Product Title</label>
              <input type="text" class="form-control" id="product_title" placeholder="RMX Black Leather M">
            </div>
            <div class="form-group">
                <label for="tagline">Tagline</label>
                <input type="text" class="form-control" id="tagline">
              </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price">
              </div>
              <div class="form-group">
                <label for="strap_color">Strap Color</label>
                <input type="text" class="form-control" id="strap_color">
              </div>
              <div class="form-group">
                <label for="watch_tech">Watch Tech</label>
                <input type="text" class="form-control" id="watch_tech">
              </div>
              <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size">
              </div>
            <div class="form-group">
              <label for="starting_stock">Starting Stock</label>
              <input type="number" min="0" class="form-control" id="starting_stock">
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
