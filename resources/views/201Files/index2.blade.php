<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('201 Files') }}
        </h2>
    </x-slot>
    <div class="py-12 flex justify-center items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-center">
                        <h6 class="mt-4 text-2xl font-bold">{{ __('List of Employee') }}</h6><br><br><br>
                    </div>
                    <table class="table-auto border-collapse">
                        <thead>
                            <tr>
                                <th class="border border-gray-500 px-4 py-2 text-center">{{ __('Employee Name') }}</th>
                                <th class="border border-gray-500 px-4 py-2 text-center">{{ __('SSS No') }}</th>
                                <th class="border border-gray-500 px-4 py-2 text-center">{{ __('Department') }}</th>
                                <th class="border border-gray-500 px-4 py-2 text-center">{{ __('View') }}</th>
                                <th class="border border-gray-500 px-4 py-2 text-center">{{ __('Edit') }}</th>
                                <th class="border border-gray-500 px-4 py-2 text-center">{{ __('Delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-500 px-4 py-2 text-center">{{ 'John Doe' }}</td>
                                <td class="border border-gray-500 px-4 py-2 text-center">{{' 987-654-321 '}}</td>
                                <td class="border border-gray-500 px-4 py-2 text-center">{{ 'IT Department' }}</td>
                                <td class="border border-gray-500 px-4 py-2 text-center">
                                    <a class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded mr-2" href="{{ route('201Files-show') }}">{{ __('View') }}</a>
                                </td>
                                <td class="border border-gray-500 px-4 py-2">
                                    <a class="bg-violet-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2" href="#">{{ __('Edit') }}</a>
                                </td>
                                <td class="border border-gray-500 px-4 py-2">
                                    <form method="POST" action="#" onclick="return confirm('Are you sure you want to delete this record?')">@csrf
                                        @method('delete')
                                        <button class=" bg-[#991b1b] hover:bg-[#ef4444] text-white font-bold py-2 px-4 rounded mr-2" type="submit">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
