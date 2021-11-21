
@include('auth.partial.header')
<body>
<div class="home-btn d-none d-sm-block">
    <a href="{{url('/')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-5">

    @yield('content')
</div>
@include('auth.partial.script')
</body>
</html>
