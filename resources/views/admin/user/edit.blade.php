@extends('layout')

@section('content')


{{ ddd($_REQUEST); }}


    <div class="container edit_page d-flex align-items-center">
        <div class="edit_form_div">
            <form method="post" action="/profile">
                @csrf
                @method('put')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name">Voornaam DD</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"  value="{{ $user->first_name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Achternaam</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">E-mail</label> 
                            <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone_number">Telefoonnummer</label> 
                            <input type="phone_number" class="form-control" id="phone_number" name="phone_number" value="{{ $user->phone_number }}">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Adres</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" value="{{ $user->address }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputWebsite">Website</label>
                            <input type="text" class="form-control" id="inputWebsite" name="website" value="{{ $user->website }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">Woonplaats</label>
                            <input type="text" class="form-control" id="inputCity" name="city" value="{{ $user->city }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Postcode</label>
                            <input type="text" class="form-control" id="inputZip" name="postal_code" value="{{ $user->postal_code }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputZip">Bedrijfsnaam</label>
                            <input type="text" class="form-control" id="inputZip" name="company_name" value="{{ $user->company_name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputZip">Bedrijfsnaam</label>
                        <input type="text" class="form-control" id="inputZip" name="role" value="{{ $user->role }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Bijwerken</button>
            </form>
        </div>
    </div>

@endsection
