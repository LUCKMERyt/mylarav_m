<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>Главная страница</title>


</head>

<body>

    <div class="main-links">
        <h1>Моя Главная Страница</h1>
        <a class="main-link" href="/mylarav/public/">Главная</a>
        <a class="main-link" href="/mylarav/public/about">О нас</a>
    </div>

    <div class="content">
        @foreach ($main as $value)
        <div class="card">
            <img class="img_card" src="{{$value->image}}" alt="">
            <div class="title">{{ $value->title ?? $value->titl }}</div>
            <p class="price">{{$value->price}}</p>
            <p class="desc">{{$value->description}}</p>
        </div>
        @endforeach
    </div>

</body>

</html>