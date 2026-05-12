<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>My Site</title>

</head>

<body>
    <header>
        <div class="header-logo">

        </div>
        <div class="header-menu">
            <div class="main-links">
                <a class="main-link" href="/mylarav/public/">Главная</a>
                <a class="main-link" href="/mylarav/public/about">О нас</a>
            </div>
        </div>
        <div class="header-login">

        </div>
    </header>


    <main class="about-wrapper">
        <div class="about-card">
            <h1>О нас</h1>
            <h2 class="about-title">Про игры</h2>
            <p class="about-text">
                Здесь про игры: от подборок и обзоров до полезных гайдов. Мы собираем информацию так, чтобы ей было легко пользоваться —
                быстро, понятно и по делу.
            </p>

            <h2 class="about-title">Чем мы занимаемся</h2>
            <ul class="about-list">
                <li>Подборки игр под разные жанры и платформы</li>
                <li>Короткие обзоры и рекомендации</li>
                <li>Гайды и советы для игроков</li>
            </ul>
        </div>
    </main>


    <footer>
    </footer>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/vue-router@next"></script>
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>