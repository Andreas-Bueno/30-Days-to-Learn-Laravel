
<x-layout>
    <x-slot:heading> Jobs Listings </x-slot:heading>

    @foreach ($jobs as $job)
    <li>
        <a href="Models/job/{{ $job['id'] }}" >
            {{ $job['title'] }}: Pays {{ $job['salary']  }} per year,
        </a>
    </li>
    @endforeach



</x-layout>
