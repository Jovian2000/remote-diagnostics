<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a0643bc99f.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/" title="Home Pagina"><i class="fa-solid fa-ship"></i></a></li>
                <li><a href="{{route('ship.index')}}" title="Map"><i class="fa-regular fa-compass"></i></a></li>
                <li><a href="{{route('user.index')}}" title="Account Pagina"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('js/dashboardChart.js')}}"></script>
<script src="{{asset('js/darkmode.js')}}"></script>