<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <x-back-button :href="route('locations.index')" />
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Location') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('locations.store') }}" method="post">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        @php
                            $types = ['city' => 'City', 'district' => 'District', 'ward' => 'Ward'];
                        @endphp

                        <div class="mt-4">
                            <x-input-label for="type" :value="__('Type')" />
                            <x-select id="type" class="block mt-1 w-full" name="type" required>
                                <option value="">--- Type ---</option>
                                @foreach ($types as $key => $label)
                                    <option value="{{ $key }}" {{ old('type') == $key ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </x-select>
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="parent_id" :value="__('Parent')" />
                            <x-select id="parent_id" class="block mt-1 w-full" name="parent_id">
                                <option value="">--- Parent ---</option>
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}"
                                        {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                                        {{ $parent->name }}
                                    </option>
                                @endforeach
                            </x-select>
                            <x-input-error :messages="$errors->get('parent_id')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-primary-button>
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
