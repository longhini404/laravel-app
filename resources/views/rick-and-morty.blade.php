<!DOCTYPE html>
<html>

<head>
    <title>Rick and Morty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Characters</h1>

        @if(isset($error))
        <div class="alert alert-danger">
            <p>{{ $error }}</p>
        </div>
        @else
        <ul>
            @foreach ($characters as $character)
            <li>{{ $character['name'] }}</li>
            @endforeach
        </ul>
        @endif
    </div>
</body>

</html>