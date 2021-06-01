<!DOCTYPE html>
<html>

{{-- Header Section --}}
@include('layouts.lte.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- Navbar Section --}}
        @include('layouts.lte.navbar')

        {{-- Sidebar Section --}}
        @include('layouts.lte.sidebar')


        <div class="content-wrapper">
            {{-- Content --}}
            @yield('content')
        </div>
        
        {{-- Section Footer --}}
        @include('layouts.lte.footer')
</body>
</html>
