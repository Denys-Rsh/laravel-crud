        <form method="post" action="{{ route('product.destroy', ['product' => $product->id]) }}" class="">
            @csrf
            @method('delete')

            <x-danger-button class="ml-3">
                {{ __('Delete') }}
            </x-danger-button>
        </form>
