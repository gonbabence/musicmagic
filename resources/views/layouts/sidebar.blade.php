<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>

@include('includes.header')

<div class="container-fluid text-center">
    <div class="row content">

        @include('includes.sidebar')

        <div class="col-sm-8 text-left">

            @include('includes.flash_message')

            @yield('content')

        </div>

    </div>
</div>

@include('includes.footer')

</body>
</html>
