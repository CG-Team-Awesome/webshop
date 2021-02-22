@extends('layout')

@section('content')
    <div class="container edit_page d-flex align-items-center">
        <div class="edit_form_div">
            <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">Voornaam</label>
                            <input type="text" class="form-control" id="{{ $user->first_name }}" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Achternaam</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">E-mail</label> 
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>

                    </div>
                    <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Check me out
                        </label>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

@endsection
