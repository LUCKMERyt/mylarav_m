<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>staems</title>
</head>
<style>
    body {
        margin: 0;
        background: #463f3f;
    }

    h1 {
        margin: 0;
        padding: 18px 20px;
        color: #ff0000;
    }
</style>
<body>
@foreach ($staems as $staem)
    <p>
        Название игры = {{ $staem->name }}
        стоимость игры = {{ $staem->sale }}
        количество игроков = {{ $staem->geims_users }}
    </p>
@endforeach
</body>
</html>

