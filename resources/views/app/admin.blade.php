@include('app.inc.header')
<body>

    <div class="page">
        <!-- Navbar -->
        @include('app.staticadmin.header')
        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="container-xl">
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('app.static.footer')
        </div>
    </div>

    @include('app.inc.footer')

</body>

</html>
