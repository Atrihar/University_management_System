<!DOCTYPE html>
<html lang="en">

<head>
    @include('supervisor.includes.head')

</head>

<body class="g-sidenav-show bg-gray-100">

    <div class="position-absolute w-100 min-height-300 top-0"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
        <span class="mask bg-primary opacity-6"></span>
    </div>

    @include('supervisor.includes.sidebar')
    <div class="main-content position-relative max-height-vh-100 h-100">
        @include('supervisor.includes.navbar')

        @yield('content')
    </div>


    <script src="{{ asset('../assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('../assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('../assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>


    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('../assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
