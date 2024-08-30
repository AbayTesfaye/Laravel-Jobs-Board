<x-layout>
    <x-slot:heading>
        Create job
    </x-slot:heading>
<form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create New Job</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">We need handfull of details from you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="title">Title</x-form-label>
            <div class="mt-2">
                <x-form-input name="title" id="title" placeholder="CEO"></x-form-input>
            </div>
              <x-form-error name='title'></x-form-error>
          </x-form-field>

          <x-form-field>
            <x-form-label for="salary">Salary</x-form-label>
            <div class="mt-2">
                <x-form-input name="salary" id="salary" placeholder="$10,000"></x-form-input>
            </div>
              <x-form-error name='salary'></x-form-error>
          </x-form-field>
        </div>
      </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <x-form-button>Save</x-form-button>
    </div>
  </form>

</x-layout>
