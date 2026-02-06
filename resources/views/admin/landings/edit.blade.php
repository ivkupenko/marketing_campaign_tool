<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Landings') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('landings.update', $landing) }}">
        @csrf
        @method('PUT')
        <div class="py-12">
            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ old('title', $landing->title) }}" />

                        <x-input-label for="country" :value="__('Country 2-letter code')" />
                        <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" value="{{ old('country', $landing->country) }}" />

                        <x-input-label for="campaign" :value="__('Campaign')" />
                        <select id="campaign" name="campaign_id" class="mt-1 block w-full">
                            @foreach($campaigns as $campaign)
                                <option value="{{ $campaign->id }}" {{ old('campaign_id', $landing->campaign_id) == $campaign->id ? 'selected' : '' }}>{{ $campaign->title }}</option>
                            @endforeach
                        </select>
                        <div>
                            <legend>{{ __('Is Catch-All') }}</legend>
                            <input type="radio" id="is_catch_all_true" name="is_catch_all" value="1" {{ old('is_catch_all', $landing->is_catch_all) ? 'checked' : '' }} />
                            <label for="is_catch_all_true">Yes</label>

                            <input type="radio" id="is_catch_all_false" name="is_catch_all" value="0" {{ !old('is_catch_all', $landing->is_catch_all) ? 'checked' : '' }} />
                            <label for="is_catch_all_false">No</label>
                        </div>

                        <label for="html" class="block font-medium text-sm text-gray-700">{{ __('Landing HTML') }}</label>
                        <textarea id="html" name="html" class="mt-1 block w-full" style="height:300px;">{{ old('html', $landing->html) }}</textarea>

                        <x-input-label for="action_url" :value="__('Action URL')" />
                        <x-text-input id="action_url" name="action_url" type="text" class="mt-1 block w-full" value="{{ old('action_url', $landing->action_url) }}" />
                    </div>
                    <x-primary-button type="submit" class="ml-3 mb-4">
                        {{ __('Update') }}
                    </x-primary-button>
                    <x-secondary-button class="ml-3" onclick="window.location='{{ route('landings.index') }}'">
                        {{ __('Cancel') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    
</form>
</x-app-layout>
