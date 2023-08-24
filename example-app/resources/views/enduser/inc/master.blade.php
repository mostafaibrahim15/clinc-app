<!DOCTYPE html>
<html lang="en">

@include('enduser.inc.head')

<body>
    @include('enduser.inc.nav')
    @yield('content')

    @include('enduser.inc.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('EnduserAsset')}}/assets/scripts/home.js"></script>
</body>

</html>
