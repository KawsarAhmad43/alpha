<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alpha</title>
    <!-- Include necessary meta tags, stylesheets, and scripts -->
    @include('backend.partials.css')
</head>

<body class="g-sidenav-show bg-gray-100">
    <!-- Sidebar -->
    @include('backend.partials.sidenav')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('backend.partials.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4 px-5">
            {{-- Include the dynamic content from pages --}}
            @yield('content')
        </div>

        <!-- Include footer -->
        @include('backend.partials.footer')
    </main>

    <!-- Include the fixed-plugin -->
    {{-- @include('backend.partials.fixed-plugin') --}}

    <!-- Include necessary scripts -->
    @include('backend.partials.javascript')
</body>

</html>
