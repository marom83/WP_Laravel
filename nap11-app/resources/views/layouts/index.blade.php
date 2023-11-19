<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webprogramozás III. - first</title>
    <style>
        body{
            background-color:lightpink;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dolgozói nyilvántartás</h1>
    </header>
    <nav>
        <a href="{{route('dolgozok.lista')}}">Lista megtekintése</a>
        <a href="{{route('dolgozok.hozzaad')}}">Új létrehozása</a>
    </nav>
    @yield('content')
</body>
</html>
