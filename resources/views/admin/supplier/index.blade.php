@extends('Adminlayout')

@section('content')
<div class="container-fluid adm_pa_main">

    <h1 class="adminh1 text-center">MaXiRu - Supplier administration</h1>
    <div class="adm_pa_div1 d-flex justify-content-center align-items-center row">
        <div><a href="{{ Route('admin.supplier.create')}}" class="btn btn-outline-success">New supplier</a><br />
        <table class="datatable">
            <thead>
                <tr>
                    <td>Naam</td>
                    <td>Adres</td>
                    <td>Postcode</td>
                    <td>Stad</td>
                    <td>Land</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                <tr>
                    <td> {{ $supplier->name }}</td>
                    <td> {{ $supplier->address }}</td>
                    <td> {{ $supplier->postal_code }}</td>
                    <td> {{ $supplier->city }}</td>
                    <td> {{ $supplier->country }}</td>
                    <td> <a class="btn btn-outline-primary btn-sm" href="{{ Route('admin.supplier.edit', $supplier->id ) }}">bewerk</a></td>
                    <td>
                        <form method="post" action="{{ Route('admin.supplier.destroy', $supplier->id ) }}">
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
@endsection

@section('scripts')
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
