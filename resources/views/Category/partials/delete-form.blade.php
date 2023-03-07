        <form method="post" action="{{ route('category.destroy', ['category' => $category->id]) }}" class="">
            @csrf
            @method('delete')

            <x-danger-button class="ml-3">
                {{ __('Delete') }}
            </x-danger-button>
        </form>
