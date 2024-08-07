<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
    <title>Document</title>
</head>
<body>
<div class="container">
    <header>
        <div class="header-main">
            @yield('header')
            <ul class="menu">
                <li><a href="{{ BASE_URL.'category/list' }}">Category Management</a></li>
                <li><a href="{{ BASE_URL.'product/list' }}">Product Management</a></li>
            </ul>
        </div>
    </header>
    <section class="content">
       @yield('content')
    </section>
    <footer>
        <span>FPT POLYTECNIC</span>
    </footer>
</div>
    @include('layout.script')
</body>
</html>