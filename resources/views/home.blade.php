<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>{{ $message }}</h1>
        <ul>
            @foreach($menus as $key =>$menu )
            <li>
                <a href="{{ $menu }}">
                    {{ $key }},
                </a>
            </li>
            @endforeach
        </ul>
    </header>
    <main>
        <h1>CONTENUTO DEL MAIN E JUMBO</h1>
    </main>
</body>
</html>