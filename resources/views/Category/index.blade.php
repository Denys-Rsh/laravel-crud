<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
        <a href="{{ route('category.create') }}">
            {{ __('Create') }}
        </a>
    </x-slot>

    @foreach($categories as $category)
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    {{ $category->name }}
                    <a href="{{ route('category.edit', ['category' => $category->id]) }}">
                        {{ __('Edit') }}
                    </a>
                    @include('category.partials.delete-form')
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
