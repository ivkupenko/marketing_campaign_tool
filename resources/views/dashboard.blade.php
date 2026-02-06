<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('campaigns.index') }}" class="text-blue-500 hover:underline">
                    {{ __("Campaigns") }}
                </div>
            </div>
        </div>
        <br>
         <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('landings.index') }}" class="text-blue-500 hover:underline">
                    {{ __("Landing Pages") }}
                </div>
            </div>
        </div>
        <br>
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('action_clicks.index') }}" class="text-blue-500 hover:underline">
                    {{ __("Actions Clicks") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
