@extends('layout')

@section('content')


<div class="container-fluid adm_pa_main">

    <h1 class="adminh1 text-center">ADMIN PAGE -- Add Product</h1>
    <div class="adm_pa_div1 d-flex justify-content-center align-items-center row">
        <form method="POST" action="{{ Route('admin.product.store') }}">
          @csrf
            <div class="form-group">
                <label for="product_category">Product Category</label>
                <select class="form-control" id="product_category" name="category_id">
                    <option value="1">horloges</option>
                    <option value="2">riemen</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="article_number">Article number</label>
                <input type="text" class="form-control" id="article_number" name="article_number" placeholder="RMX Black Leather M">
              </div>
              <div class="form-group">
                <label for="supplier">Supplier</label>
                <select class="form-control" id="supplier" name="supplier_id">
                    <option value="1">Maxiru</option>
                  </select>
              </div>
            <div class="form-group">
              <label for="product_title">Product Title</label>
              <input type="text" class="form-control" id="product_title" name="name" placeholder="RMX Black Leather M">
            </div>
            <div class="form-group">
                <label for="tagline">Tagline</label>
                <input type="text" class="form-control" id="tagline" name="tagline">
              </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
              </div>
              <div class="form-group">
                <label for="tax_group">Tax Group</label>
                <select class="form-control" id="tax_group" name="tax_group_id">
                    <option value="1">0%</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="strap_color">Strap Color</label>
                <input type="text" class="form-control" id="strap_color" name="strap_color">
              </div>
              <div class="form-group">
                <label for="watch_tech">Watch Tech</label>
                <input type="text" class="form-control" id="watch_tech"name="watch_tech">
              </div>
              <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size" name="size">
              </div>
            <div class="form-group">
              <label for="starting_stock">Starting Stock</label>
              <input type="number" min="0" class="form-control" id="starting_stock" name="in_stock">
            </div>
            <div class="form-group">
                <label for="image_uploader">Upload Images</label>
                <input type="file" class="form-control-file" id="image_uploader" multiple>
            </div>
            <button type="submit" class="btn btn-success btn-adm-addpd">Add Product</button>
            <button class="btn btn-warning btn-adm-cancelpd2">Cancel</button>
          </form>
            <a href="/admin/product"><button class="btn btn-warning btn-adm-cancelpd">Cancel</button></a>
    <div>
</div>


@endsection
