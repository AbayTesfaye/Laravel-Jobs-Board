<x-layout>
    <x-slot:heading>
        Listing of jobs
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <li >
            <a href="/jobs/{{ $job['id']}}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}</strong>: payed {{ $job['salary'] }} per month.
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>
