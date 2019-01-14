<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.header')

@include('includes.sidebar')

<div id="main" class="row">
    @yield('content')
</div>

<footer class="col-md-7">
    @include('includes.footer')
</footer>

</div>
</body>
</html>