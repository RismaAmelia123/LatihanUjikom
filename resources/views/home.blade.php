<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    Selamat Datang, {{ Auth::user()->name }}
    <a href="/logout">Keluar</a>
    <a href="/logout">Home</a>

    @if (Auth::user()->level == 'admin')
        <a href="/logout">User</a>
    @endif

</body>
</html>