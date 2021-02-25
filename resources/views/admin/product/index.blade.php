@extends('Adminlayout')

@section('content')
<div class="container-fluid adm_pa_main">

    <h1 class="adminh1 text-center">MaXiRu - Product administration</h1>
    <div class="adm_pa_div1 d-flex justify-content-center align-items-center row">
        <div><a href="{{ Route('admin.product.create')}}" class="btn btn-outline-success">New product</a><br />
        <table class="datatable">
            <thead>
                <tr>
                    <td>Artikelnr.</td>
                    <td>Naam</td>
                    <td>Tagline</td>
                    <td>Voorraad</td>
                    <td>Beschikbaar tot</td>
                    <td>Prijs</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td> {{ $product->article_number }}</td>
                    <td> {{ $product->name }}</td>
                    <td> {{ $product->tagline }}</td>
                    <td> {{ $product->in_stock }}</td>
                    <td> {{ $product->available_until }}</td>
                    <td>&euro;{{ $product->price }}</td>
                    <td> <a class="btn btn-outline-primary btn-sm" href="{{ Route('admin.product.edit', $product->id ) }}">bewerk</a></td>
                    <td>
                        <form method="post" action="{{ Route('admin.product.destroy', $product->id ) }}">
                            @csrf @method('delete')
                            <button class="btn btn-sm btn-outline-danger">verwijder</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        } );
    </script>

@endsection
