<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actions Clicks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('dashboard') }}">
                <x-primary-button class="mb-4">
                    {{ __('Back') }}
                </x-primary-button>
            </form>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="px-4 py-2 text-left">Landing Title</th>
                                <th class="px-4 py-2 text-center">Country</th>
                                <th class="px-4 py-2 text-left">Campaign</th>
                                <th class="px-4 py-2 text-left">Action URL</th>
                                <th class="px-4 py-2 text-center">Clicks Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($raws as $raw)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-4 py-2">{{ $raw->landing->title }}</td>
                                    <td class="px-4 py-2 text-center">{{ $raw->country ?? 'ALL' }}</td>
                                    <td class="px-4 py-2">{{ $raw->landing->campaign?->title}}</td>
                                    <td class="px-4 py-2">{{ $raw->landing->action_url }}</td>
                                    <td class="px-4 py-2 text-center">{{ $raw->clicks }}</td>
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
