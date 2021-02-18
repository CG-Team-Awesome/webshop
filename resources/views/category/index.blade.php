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
<td></td>
</tr>
@foreach ($categories as $category)
<tr>
    <td> {{ $category->name }}</td>
    <td> {{ $category->description }}</td>
</tr>
@endforeach
</table>
    
</body>
</html>