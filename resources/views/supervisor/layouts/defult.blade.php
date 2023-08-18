<!DOCTYPE html>
<html lang="en">

<head>
    @include('supervisor.includes.head')
</head>

<body class="g-sidenav-show   bg-gray-100">

    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('supervisor.includes.sidebar')

    <main class="main-content position-relative border-radius-lg ">

        @include('supervisor.includes.navbar')

        <div class="container-fluid py-4">

            @yield('content')

            @include('supervisor.includes.footer')

        </div>

    </main>

    @include('supervisor.includes.script')

</body>

</html>
