<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <x-back-button :href="route('amenities.index')" />
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Show Amenity') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-table>
                        <x-thead>
                            <x-tr>
                                <x-th>{{ __('Attribute') }}</x-th>
                                <x-th>{{ __('Value') }}</x-th>
                            </x-tr>
                        </x-thead>
                        <x-tbody>
                            <x-tr>
                                <x-th>{{ __('Id') }}</x-th>
                                <x-td>#{{ $amenity->id }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Name') }}</x-th>
                                <x-td>{{ $amenity->name }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Description') }}</x-th>
                                <x-td>{{ $amenity->description }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Created at') }}</x-th>
                                <x-td>{{ $amenity->created_at }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Updated at') }}</x-th>
                                <x-td>{{ $amenity->updated_at }}</x-td>
                            </x-tr>
                        </x-tbody>
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
