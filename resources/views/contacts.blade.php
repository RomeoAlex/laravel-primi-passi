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
        <ul>
            @foreach($menus as $menu)
            <li>
                <a href="">
                    {{ $menu }},
                </a>
            </li>
            @endforeach
        </ul>
    </header>
    <main>
        <h1>email</h1>
        <h1>twitter</h1>
        <h1>Facebook</h1>
    </main>
</body>
</html>