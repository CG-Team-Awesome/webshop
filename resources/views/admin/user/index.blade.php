@extends('layout')

@section('content')


    <div class="container mt-4" style="background-color: white">
        <table class="datatable">
            <thead>
                <tr>
                    <td>Voornaam</td>
                    <td>Achternaam</td>
                    <td>E-mail</td>
                    <td>Telefoonnummer</td>
                    <td>Adres</td>
                    <td>Woonplaats</td>
                    <td>Postcode</td>
                    <td>Website</td>
                    <td>Bedrijfsnaam</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td> {{ $user->first_name }}</td>
                    <td> {{ $user->last_name }}</td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->phone_number }}</td>
                    <td> {{ $user->address }}</td>
                    <td> {{ $user->city }}</td>
                    <td> {{ $user->postal_code }}</td>
                    <td> {{ $user->website }}</td>
                    <td> {{ $user->company_name }}</td>
                    {{-- <td> <a class="btn btn-outline-primary btn-sm" href="{{ Route }}">Bewerk</a></td>
                    <td>
                        <form method="post" action="{{ Route('admin.user.destroy', $user->id ) }}">
                            @csrf @method('delete')
                            <button class="btn btn-sm btn-outline-danger">Verwijder</button>
                        </form>
                    </td> --}} 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection