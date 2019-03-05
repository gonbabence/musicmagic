<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    @include('includes.flash_message')
    <div id="main">
        @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</div>
</body>
</html>
