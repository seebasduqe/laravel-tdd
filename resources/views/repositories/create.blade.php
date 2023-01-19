<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('repositories.store') }}" method="POST" class="max-w-mg">
                    @csrf
                    <label class="block font-medium text-sm text-gray-700">URL *</label>
                    <input class="form-input w-full rounded-md shadow-sm" type="text" name="url">

                    <label class="block font-medium text-sm text-gray-700">Descripcion*</label>
                    <textarea class="form-input w-full rounded-md shadow-sm" type="text" name="description"></textarea>

                    <hr class="my-4">
                    <button type="submit" >
                        guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
