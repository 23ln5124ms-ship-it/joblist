<!DOCTYPE html>
<html>
<head>
    <title>JobsDetail</title>
</head>
<body>
    <nav>
        <x-nav-link href="/" style="color:coral">Home</x-nav-link>
        <x-nav-link href="/about" style="color:coral">About</x-nav-link>
        <x-nav-link href="/contact" style="color:coral">Contact</x-nav-link>
        <x-nav-link href="/jobs" style="color:coral">Jobs</x-nav-link>
    </nav>
    <div>
        <h1>{{ $job['title'] }}</h1>

        <p><strong>Salary:</strong> {{ $job['salary'] }}</p>
        <p><strong>Description:</strong> {{ $job['description'] }}</p>
    </div>
    <br>

<a href="/jobs"  style="color:coral">Back to joblist</a>

</body>
</html>