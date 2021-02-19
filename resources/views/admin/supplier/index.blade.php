<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leveranciers</title>
</head>

<body>

    <table>
        <tr>
            <td>Naam</td>
            <td>Adres</td>
            <td>Postcode</td>
            <td>Stad</td>
            <td>Land</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($suppliers as $supplier)
        <tr>
            <td> {{ $supplier->name }}</td>
            <td> {{ $supplier->address }}</td>
            <td> {{ $supplier->postal_code }}</td>
            <td> {{ $supplier->city }}</td>
            <td> {{ $supplier->country }}</td>
            <td> <a href="{{ Route('leverancier.edit', $supplier->id ) }}">bewerk</a></td>
            <td>
                <form method="post" action="{{ Route('leverancier.destroy', $supplier->id ) }}">
                    @csrf @method('delete')
                    <button>verwijder</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>