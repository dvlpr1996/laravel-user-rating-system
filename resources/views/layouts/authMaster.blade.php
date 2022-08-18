@include('layouts.header')

@yield('content')

@vite('resources/js/app.js')
@include('sweetalert::alert')

</body>

</html>
