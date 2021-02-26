@extends('Adminlayout')

@section('content')


<div class="container-fluid adm_pa_main">

    <h1 class="adminh1 text-center">MaXiRu - Edit Supplier</h1>
    <div class="adm_pa_div1 d-flex justify-content-center align-items-center row">
        <form method="POST" action="{{ Route('admin.supplier.update', $supplier) }}">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $supplier->name }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $supplier->address }}">
              </div>
              <div class="form-group">
                <label for="postal_code">Postal code</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $supplier->postal_code }}">
              </div>
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $supplier->city }}">
              </div>
              <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country"name="country" value="{{ $supplier->country }}">
              </div>
            <button type="submit" class="btn btn-success btn-adm-addpd">Update Supplier</button>
            <button class="btn btn-warning btn-adm-cancelpd2">Cancel</button>
          </form>
            <a href="{{ Route('admin.supplier.index') }}"><button class="btn btn-warning btn-adm-cancelpd">Cancel</button></a>
    <div>
</div>


@endsection
