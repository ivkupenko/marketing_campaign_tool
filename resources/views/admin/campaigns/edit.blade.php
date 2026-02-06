<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Campaigns') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('campaigns.update', $campaign->id) }}">
        @csrf
        @method('PUT')
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ old('title', $campaign->title) }}" />

                    <x-input-label for="slug" :value="__('Slug')" />
                    <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" value="{{ old('slug', $campaign->slug) }}" />
                </div>
                <x-primary-button type="submit" class="ml-3 mb-4">
                     {{ __('Update') }}
                </x-primary-button>
                <x-secondary-button class="ml-3" onclick="window.location='{{ route('campaigns.index') }}'">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </div>
        </div>
    </div>
    
</form>
</x-app-layout>