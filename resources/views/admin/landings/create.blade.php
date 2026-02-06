<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Landings') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('landings.store') }}">
        @csrf
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" />

                    <x-input-label for="country" :value="__('Country 2-letter code')" />
                    <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" />

                    <x-input-label for="campaign" :value="__('Campaign')" />
                    <select id="campaign" name="campaign_id" class="mt-1 block w-full">
                        @foreach($campaigns as $campaign)
                            <option value="{{ $campaign->id }}">{{ $campaign->title }}</option>
                        @endforeach
                    </select>
                   <div>
                        <legend>{{ __('Is Catch-All') }}</legend>
                        <input type="radio" id="is_catch_all_true" name="is_catch_all" value="1"/>
                        <label for="is_catch_all_true">Yes</label>

                        <input type="radio" id="is_catch_all_false" name="is_catch_all" value="0"/>
                        <label for="is_catch_all_false">No</label>
                    </div>


                    <textarea id="html" name="html" class="mt-1 block w-full" style="height:300px;"></textarea>
                </div>
                <x-primary-button type="submit" class="ml-3 mb-4">
                     {{ __('Create') }}
                </x-primary-button>
                <x-secondary-button class="ml-3" onclick="window.location='{{ route('landings.index') }}'">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </div>
        </div>
    </div>
    
    </form>
</x-app-layout>
