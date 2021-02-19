<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorieën</title>
</head>

<body>

    <table>
        <tr>
            <td>Naam</td>
            <td>Omschrijving</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td> {{ $category->name }}</td>
            <td> {{ $category->description }}</td>
            <td> <a href="{{ Route('categorie.edit', $category->id ) }}">bewerk</a></td>
            <td>
                <form method="post" action="{{ Route('categorie.destroy', $category->id ) }}">
                    @csrf @method('delete')
                    <button>verwijder</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>