@include('layouts/_includes/header')

<body id="top-header">
    @include('layouts/_includes/nav')
    <main>
        @yield('content')
    </main>
    @include('layouts/_includes/footer')
</body>
