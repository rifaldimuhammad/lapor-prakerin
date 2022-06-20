<!DOCTYPE html>
<html lang="en">
@include('layout/link') {{-- ['title' => $title] --}}

<body>
        {{-- @include('layouts/', ['sidebarType' => $sidebarType], ['ads' => $ads]) --}}
    @yield('content')
    @include('layout/script')
    @yield('js')
</body>
</html>
