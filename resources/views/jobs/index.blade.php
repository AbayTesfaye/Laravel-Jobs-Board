<x-layout>
    <x-slot:heading>
        Listing of jobs
    </x-slot:heading>
     <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{$job->employer->name}}</div>
                <div>
                    <strong class="text-laracast">{{ $job['title'] }}</strong>: payed {{ $job['salary'] }} per month.
                </div>

            </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>
