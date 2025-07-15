<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Location') }}
            </h2>
            <x-create-button :href="route('locations.create')" />
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
                    @if ($locations->count() > 0)
                        <x-table>
                            <x-thead>
                                <x-tr>
                                    <x-th>{{ __('Id') }}</x-th>
                                    <x-th>{{ __('Name') }}</x-th>
                                    <x-th>{{ __('Type') }}</x-th>
                                    <x-th>{{ __('Created at') }}</x-th>
                                    <x-th>{{ __('Actions') }}</x-th>
                                </x-tr>
                            </x-thead>
                            <x-tbody>
                                @foreach ($locations as $location)
                                    <x-tr>
                                        <x-td>#{{ $location->id }}</x-td>
                                        <x-td>{{ $location->name }}</x-td>
                                        <x-td>{{ $location->type }}</x-td>
                                        <x-td>{{ $location->created_at }}</x-td>
                                        <x-td>
                                            <x-show-button :href="route('locations.show', $location)" />
                                            <x-edit-button :href="route('locations.edit', $location)" />
                                            <x-destroy-form :action="route('locations.destroy', $location)">
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
