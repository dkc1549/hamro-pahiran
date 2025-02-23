<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.layouts.header')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('frontend.layouts.navbar')

    @include('frontend.layouts.hero')

    @yield('main-content')
    @include('frontend.layouts.footer')



</body>

</html>
