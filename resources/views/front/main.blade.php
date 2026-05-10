<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>
<style>
    .sidebar{
        width: 30%;
        height: 700px;
        display: flex;
    }
    .content{
        width: 70%;
        height: 700px;
        display: flex;
        justify-content: space-between;
    }
    .content_item{
        width: 300px;
        height: 400px;
        background-color: #8cb5bd;
    }
    .content_item img{
        width: 280px;
        height: 280px;
        margin: 0 auto;
    }
    .price{
        color: #1937bd;
    }




</style>
<h1 style="color: #ff8200"> Моя Главная Страница</h1>



<div class="sidebar">

</div>

<div class="content">



    @foreach ($main as $value)
        <div class="content_item">
            <img src="{{$value->image}}" alt="">
            <h3>{{$value->title}}</h3>
            <p class="price">{{$value->price}}</p>
            <p>{{$value->description}}</p>
        </div>
    @endforeach
</div>






<script>

</script>

</body>
</html>


<?php
