<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="tasks/create">
                        <button>
                            {{ __("Create Task") }}
                        </button>
                    </a>
                </div>
            </div>
            <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-white-50 dark:bg-white-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ _('Desc') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ _('Finished') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __("Edit") }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __("Delete") }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $index=>$task)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $index+1 }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="tasks/{{$task->id}} " class="text-center">
                                {{ $task->desc }}
                            </a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if ($task->is_finished === 1)
                                {{ __('YES') }}
                            @else
                                {{ __('NO') }}
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('tasks.edit',['task' => $task->id]) }}" class="mt-4 bg-red-500">
                                {{ __("Edit") }}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('tasks.destroy',['task' => $task->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button>
                                    {{ __("Delete") }}
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>