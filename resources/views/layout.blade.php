<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/layout.css">
    <script src="/assets/js/layout.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <a href="/" id="header-title"><h1>Studeex</h1></a>
        <nav>
            <div id="menu-button" onclick="clickMenuButton()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul id="menu-list" class="">
                <li><a href="/sobre">
                    <img src="" alt="Ícone: Sobre o projeto" class="list-icon">
                    <span class="list-name">Sobre o projeto</span>
                </a></li>
                <li><a href="/contato">
                    <img src="" alt="Ícone: Contato" class="list-icon">
                    <span class="list-name">Contato</span>
                </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="main-content">
            @yield('content')
        </div>
    </main>
    <footer>
        <p id="copyright">Copyright, Studeex - 2024</p>
    </footer>
    <div id="dark-background-div" onclick="clickDarkBackgroundDiv()"></div>
</body>
</html>