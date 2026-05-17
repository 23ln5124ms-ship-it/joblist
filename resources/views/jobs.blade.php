<x-layout>

<h1>Available Jobs</h1>

<ul>
@foreach($jobs as $job)
    <li>
        <a href="/jobs/{{ $job['id'] }}" style="color:coral">
            {{ $job['title'] }} - {{ $job['salary'] }}
        </a>
    </li>
@endforeach
</ul>

</x-layout>