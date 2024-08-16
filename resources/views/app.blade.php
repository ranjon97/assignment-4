<!DOCTYPE html>
<html>
<head>
    <title>Contact Management</title>
</head>
<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @yield('content')
</body>
</html>
