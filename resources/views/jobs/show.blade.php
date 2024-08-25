<x-layout>
    <x-slot:heading>
        job details
    </x-slot:heading>
    <h1>Job ID : {{$job['id']}}</h1>
  <h2>{{$job['title']}}</h2>
  <p>This job pays {{$job['salary']}} per month</p>

</x-layout>
