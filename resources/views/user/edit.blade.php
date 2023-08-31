<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="post" action="{{ route('user.update',['user' => $user->id]) }}">
                        @csrf
                        @method("PUT")
                        <label for="username">
                            {{ _('Username') }}
                        </label>
                        <input type="text" name="username" type="text" value="{{ $user->username }}" required autofocus>
                        <button type="submit">
                            {{ __("Edit") }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
