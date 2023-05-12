<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div classe="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
        <img src="/img/hdcevents_rosa.jpg" alt="HDC Events">
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="/" class="nav-link">eventos</a>
        </li>
        <li class="nav-item">
            <a href="/events/create" class="nav-link">criar-eventos</a>
        </li>
        <li class="nav-item">
            <a href="/events/contato" class="nav-link">contatos</a>
        </li>
        <li class="nav-item">
            <a href="/events/produto" class="nav-link">produtos</a>
        </li>
        <li class="nav-item">
            <a href="/" class="nav-link">cadastrar</a>
        </li>
        <li class="nav-item">
            <a href="/" class="nav-link">entrar</a>
        </li>
    </ul>
    </div>
        </nav>
        </header>
        @yield('content')
<footer>
    <p>HDC Events &copy; 2020</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title') - GN</title>
</head>
<body>
    @yield('content')
</body>
</html>