<!DOCTYPE html>
<html>
<head>
    @include('user/layouts/head')
</head>
<body data-color="theme-1">
    
    {{-- Loading bar --}}
    <div class="loading">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_four"></div>
                <div class="object object_three"></div>
                <div class="object object_two"></div>
                <div class="object object_one"></div>
            </div>
        </div>
    </div>
    
    {{-- include header --}}
    @include('user/layouts/header')
    
    {{-- extends main content --}}
    @section('main-content')
    @show
    
    {{-- include footer --}}
    @include('user/layouts/footer')
</body>
</html>
