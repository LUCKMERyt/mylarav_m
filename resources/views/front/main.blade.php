<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #463f3f;
            color: #1f2937;
        }

        h1 {
            margin: 0;
            padding: 18px 20px;
            background: #3e4747;
            border-bottom: 1px solid #e5e7eb;
            color: #ff8200;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .card {
            margin: 0 auto;
            width: 300px;
            background: #474f52;
            border: 1px solid #557571;
            border-radius: 12px;
            padding: 12px;
        }

        .img_card {
            width: 100%;
            height: 220px;
            border-radius: 10px;
            background: #d7f7ff;
        }

        .title {
            margin: 10px 0 6px;
            font-size: 16px;
            font-weight: 700;
            color: #000000;
        }

        .price {
            margin: 0 0 8px;
            font-weight: 800;
            color: #001264;
        }

        .desc {
            margin: 0;
            font-size: 13px;
            color: #ffaf1c;
        }
    </style>
</head>

<body>

    <h1>Моя Главная Страница</h1>

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