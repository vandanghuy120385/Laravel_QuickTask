<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="post" action="{{ route('user.store') }}">
                        @csrf
                        @method("POST")
                        <div>
                            <label for="first_name">{{ __('First name') }}</label>
                            <input type="text" name="first_name" class="block" required autofocus>
                        </div>
                        <div>
                            <label for="last_name">{{ __('Last name') }}</label>
                            <input type="text" name="last_name" class="block" required autofocus>
                        </div>
                        <div>
                            @if(isset($messages['username.max:255']))
                            <div class="text-red-500">{{ $messages['username.max:255'] }}</div>
                            @endif
                            <label for="username">{{ __('Username')}}</label>
                            <input class="block" type="text" name="username" required autofocus>
                        </div>
                        <div>
                            <label for="email">{{ __('Email') }}</label>
                            <input class="block" type="email" name="email" required autofocus>
                        </div>
                        <div>
                            <label for="password">{{ __('Password') }}</label>
                            <input class="block" type="password" name="password" required autofocus>
                        </div>
                        <div>
                            <label for="is_admin">{{ __('Admin') }}</label>
                            <input type="radio" name="is_admin" value="1">
                        </div>
                        <button type="submit" class=" text-l hover:text-xl px-2 py-2">{{ __('Create') }}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>