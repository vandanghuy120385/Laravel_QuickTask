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
                    <button class="mx-5">
                        {{ __("Create Task") }}
                    </button>
                    <button>
                        {{ __("Create Role") }}
                    </button>
                </div>
            </div>
            <h3 class="font-semibold text-l text-gray-800 leading-tight">
                {{ __('Task List') }}
            </h3>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-white-50 dark:bg-white-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Task ID')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Description') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __ ('Finished') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4">
                            {{ $task->id }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $task->desc }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $task->is_finished == 0 ? 'No' : 'Yes' }}
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
            <h3 class="font-semibold text-l text-gray-800 leading-tight">
                {{ __('Role List') }}
            </h3>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-white-50 dark:bg-white-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Role ID') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Name') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4">
                            {{ $role->id }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $role->name }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="mt-4 text-red-500">
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
