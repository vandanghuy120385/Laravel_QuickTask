<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="post" action="{{ route('tasks.store') }}">
                        @csrf
                        @method("POST")
                        <div>
                            <label for="desc">{{ __('Description') }}</label>
                            <input type="text" name="desc" class="block" required autofocus>
                        </div>
                        <div>
                            <label for="desc">{{ __('User') }}</label>
                            <select name="user_id" id="user_id">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->username }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="is_finished">{{ __('Finished') }}</label>
                            <input type="radio" name="is_finished" value="1">
                            <label for="true">{{ __('YES') }}</label>
                            <input type="radio" name="is_finished" value="0">
                            <label for="false">{{ __('NO') }}</label>
                        </div>
                        <button type="submit" class=" text-l hover:text-xl px-2 py-2">{{ __('Create') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
</x-app-layout>
