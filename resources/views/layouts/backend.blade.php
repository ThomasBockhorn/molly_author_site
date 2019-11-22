@include('layouts/_includes/header')

<body id="top-header">
    @include('layouts/_includes/backendNav')
    <section>
        @yield('content')
    </section>
    @include('layouts/_includes/footer')
</body>
