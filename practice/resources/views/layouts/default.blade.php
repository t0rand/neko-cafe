<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel9学習')</title>
    <style>
        .container {
            position: relative;
            min-height: 100vh;
            max-width: 1280px;
            margin: 0 auto;
        }
        header {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }
        nav ul {
            display: flex;
            padding: 0;
            list-style: none;
        }
        nav li {
            margin-right: 10px;
        }
        a {
            color: #0f83fd;
        }
        main {
            padding: 10px 0;
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>Laravel9学習</h1>
        <nav>
            <ul>
                <li><a href="/">トップ</a></li>
                <li><a href="/curriculum">カリキュラム</a></li>
                <li><a href="/events">イベント</a></li>
                <li><a href="#">サービス</a></li>
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

    <main>
      <h2>@yield('title', 'laravel9学習')</h2>
      @yield('content')
    </main>

    <footer>
        <p>&copy; 2022 ●●▲▲</p>
    </footer>
</div>
</body>
</html>