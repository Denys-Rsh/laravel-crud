<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <a href="{{ route('product.create') }}">
            {{ __('Create') }}
        </a>
    </x-slot>

    @foreach($products as $product)
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ $product->name }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $product->category->name }}
                        </p>
                    </header>

                    <a href="{{ route('product.edit', ['product' => $product->id]) }}">
                        {{ __('Edit') }}
                    </a>

                    @include('product.partials.delete-form')
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
