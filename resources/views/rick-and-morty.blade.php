<!DOCTYPE html>
<html>

<head>
    <title>API RICK AND MORTY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #111828; color: white;">
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