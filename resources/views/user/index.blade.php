<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button>
                        {{ __("Create User") }}
                    </button>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-white-50 dark:bg-white-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            {{ __('User ID') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Name') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Username') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Action') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $user->id }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{$user->id}} " class="text-center">
                                {{ $user->fullname }}
                            </a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $user->username }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="mt-4 bg-red-500">
                                {{ __("Edit") }}
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="mt-4 text-red-500">
                                {{ __("Delete") }}
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
