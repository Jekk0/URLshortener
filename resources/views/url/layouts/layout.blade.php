<!DOCTYPE html>
<html lang="en">
<head>
    <title>Сокращение URL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Описание  -->
    <meta name="description" content="Сокращение URL -дополнительный короткий (альтернативный) URL-адрес для доступа
     к веб-странице. ">
    <link href="{{asset('favicon.ico')}}" rel="shortcut ico" >
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/ajax.js')}}"></script> <!--Подключаем JS -->

</head>
<body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-83220151-1', 'auto');
    ga('send', 'pageview');

</script>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li> <a href="{{route('main')}}"> Главная </a> </li>
                <li><a href="{{route('about')}}"> О сайте </a> </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
     @yield('content')
</div>

</body>
</html>