<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.page_head')
</head>

<body>
    @include('admin.includes.sidebar')


    <div class="wrapper d-flex flex-column min-vh-100 bg-light">

        <header class="header header-sticky mb-4">
            @include('admin.includes.header')
        </header>

        @yield('content')
        <footer class="footer">
            @include('admin.includes.footer')
        </footer>

    </div>


    @include('admin.includes.script')
</body>

</html>
