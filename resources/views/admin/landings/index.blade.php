<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Landings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-primary-button class="ml-3 mb-4">
            <a href="{{ route('landings.create') }}">
                {{ __('Create Landing') }}
            </a>
        </x-primary-button>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="px-4 py-2 text-left">Title</th>
                                <th class="px-4 py-2 text-left">Country</th>
                                <th class="px-4 py-2 text-left">Campaign</th>
                                <th class="px-4 py-2 text-left">Action URL</th>
                                <th class="px-4 py-2 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($landings as $landing)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-4 py-2">{{ $landing->title }}</td>
                                    <td class="px-4 py-2">{{ $landing->country ?? ($landing->is_catch_all ? 'Catch-All' : 'Not Assigned') }}</td>
                                    <td class="px-4 py-2">{{ $landing->campaign->title}}</td>
                                    <td class="px-4 py-2">{{ $landing->action_url }}</td>
                                    <td class="px-4 py-2 text-center flex gap-2">
                                        <x-nav-link href="{{ route('landings.edit', $landing) }}">
                                            {{ __('Edit') }}
                                        </x-nav-link>
                                        
                                        <form method="POST" action="{{ route('landings.destroy', $landing) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-gray-500">No landing found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
