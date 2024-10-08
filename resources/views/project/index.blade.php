<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('project.create') }}" class="border p-4 bg-sky-700 text-white">
                        Add New Project
                    </a>
                    <table class="w-full mt-8">
                        <thead>
                            <tr class="p-4 border">
                                <th class="p-4 border">
                                    Name
                                </th>
                                <th class="p-4 border">
                                    Category
                                </th>
                                <th class="p-4 border">
                                    Client
                                </th>
                                <th class="p-4 border">
                                    Payment
                                </th>
                                <th class="p-4 border">
                                    Timeline
                                </th>
                                <th class="p-4 border">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($Projects as $Project)
                            <tr class="p-4 border text-center">
                                <td class="p-4 border">{{ $Project->name }}</td>
                                <td class="p-4 border">{{ $Project->category->name }}</td>
                                <td class="p-4 border">{{ $Project->client->name }}</td>
                                <td class="p-4 border">{{ $Project->payment->name }}</td>
                                <td class="p-4 border">{{ $Project->start_date.' to '.$Project->end_date }}</td>
                                <td class="p-4 border">
                                    <a href="{{ route('project.edit', $Project) }}" class="inline-flex items-center px-4 py-2 bg-yellow-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 active:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition ease-in-out duration-150">Edit</a>
                                    |
                                    <form onsubmit="confirm('Yakin Hapus?')" class="inline-block" action="{{ route('project.destroy', $Project) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <x-danger-button>Delete</x-danger-button>
                                    </form>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                    <div class="p-4">
                        {{ $Projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>