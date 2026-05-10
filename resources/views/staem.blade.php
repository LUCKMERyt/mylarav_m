<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>staems</title>
</head>
<body>
@foreach ($staems as $staem)
    <p style="color: aqua; background-color: #1c1c1a" > Название игры = {{ $staem->name}} стоимость игры = {{ $staem->sale}} количество играков = {{ $staem->geims_users}}</p>

@endforeach
</body>
</html>
