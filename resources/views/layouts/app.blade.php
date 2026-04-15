<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Laravel App')</title>
</head>
<body>

    <nav>
        <a href="/hello/Keir">Hello</a> |
        <a href="/data">Data</a> |
        <a href="/webpage">Web Page</a>
    </nav>

    <hr>

    <div class="content">
        @yield('content')
    </div>

    <hr>
    <footer>
        <p>My Laravel App &copy; 2026</p>
    </footer>

</body>
</html>
