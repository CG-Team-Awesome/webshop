@extends('Adminlayout')

@section('content')


<div class="container-fluid adm_pa_main">

    <h1 class="adminh1 text-center">MaXiRu - Add Category</h1>
    <div class="adm_pa_div1 d-flex justify-content-center align-items-center row">
        <form method="POST" action="{{ Route('admin.category.store') }}">
          @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Schoenen">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
              </div>
            <button type="submit" class="btn btn-success btn-adm-addpd">Add Category</button>
            <button class="btn btn-warning btn-adm-cancelpd2">Cancel</button>
          </form>
            <a href="{{ Route('admin.category.index') }}"><button class="btn btn-warning btn-adm-cancelpd">Cancel</button></a>
    <div>
</div>


@endsection
