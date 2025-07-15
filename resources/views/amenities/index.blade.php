<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Amenity') }}
            </h2>
            <x-create-button :href="route('amenities.create')" />
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-search-form>
                        <x-text-input class="pl-10 w-full" type="search" name="search" :value="$search"
                            placeholder="Search..." />
                    </x-search-form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 text-gray-900">
                    @if ($amenities->count() > 0)
                        <x-table>
                            <x-thead>
                                <x-tr>
                                    <x-th>{{ __('Id') }}</x-th>
                                    <x-th>{{ __('Name') }}</x-th>
                                    <x-th>{{ __('Created at') }}</x-th>
                                    <x-th>{{ __('Actions') }}</x-th>
                                </x-tr>
                            </x-thead>
                            <x-tbody>
                                @foreach ($amenities as $amenity)
                                    <x-tr>
                                        <x-td>#{{ $amenity->id }}</x-td>
                                        <x-td>{{ $amenity->name }}</x-td>
                                        <x-td>{{ $amenity->created_at }}</x-td>
                                        <x-td>
                                            <x-show-button :href="route('amenities.show', $amenity)" />
                                            <x-edit-button :href="route('amenities.edit', $amenity)" />
                                            <x-destroy-form :action="route('amenities.destroy', $amenity)">
                                                <x-destroy-button />
                                            </x-destroy-form>
                                        </x-td>
                                    </x-tr>
                                @endforeach
                            </x-tbody>
                        </x-table>
                    @else
                        <div class="text-center py-12 font-medium text-gray-900">
                            No data available.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
