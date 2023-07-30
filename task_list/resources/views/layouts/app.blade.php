<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task List App With Laravel 10</title>
    @yield('style')
</head>

<body>

    <h1>@yield('title')</h1>
    <div>
        @if (session()-> has('success'))

        <div>{{session('success')}}</div>
            
        @endif
        @yield('content')
    </div>
    {{-- <div>
        @yield('content')
    </div> --}}

</body>

</html>