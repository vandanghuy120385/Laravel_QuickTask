<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="font-semibold text-l text-gray-800 leading-tight">
                        Task {{ $task->id }}
                    </h3>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-white-50 dark:bg-white-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Task ID') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Description') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Finished') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('User') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4">
                            {{ $task->id }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $task->desc }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $task->is_finished == 0 ? __('NO') : __('YES') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $task->user->username }}
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</x-app-layout>
