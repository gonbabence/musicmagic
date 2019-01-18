@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
@if(Session::has('info'))
    <p class="alert alert-info">{{ Session::get('info') }}</p>
@endif
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif