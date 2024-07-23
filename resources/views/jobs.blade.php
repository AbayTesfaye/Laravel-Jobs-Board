<x-layout>
    <x-slot:heading>
        Listing of jobs
    </x-slot:heading>
    @foreach ($jobs as $job)
      <li><strong>{{ $job['title'] }}</strong>: payed {{ $job['salary'] }} per month.</li>
    @endforeach
</x-layout>
