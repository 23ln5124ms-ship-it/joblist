<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobList</title>
</head>
<body>
    <nav>
        <x-nav-link href="/" style="color:coral">Home</x-nav-link>
        <x-nav-link href="/about" style="color:coral">About</x-nav-link>
        <x-nav-link href="/contact" style="color:coral">Contact</x-nav-link>
        <x-nav-link href="/jobs" style="color:coral">Jobs</x-nav-link>
    </nav>

    {{ $slot }}

</body>
</html>