<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Viaggi Disponibili!</h1>


    @foreach ($trips as $trip)
        <ul>
            <li>{{$trip->name}}</li>
            <li>{{$trip->city}}</li>
            <li>{{$trip->price}}</li>
        </ul>
    @endforeach
</body>
</html>