<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <x-back-button :href="route('locations.index')" />
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Show Location') }}
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
                                <x-td>#{{ $location->id }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Name') }}</x-th>
                                <x-td>{{ $location->name }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Type') }}</x-th>
                                <x-td>{{ $location->type }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Parent') }}</x-th>
                                <x-td>{{ $location->parent->name ?? 'N/A' }}</x-td>
                            </x-tr>

                            <x-tr>
                                <x-th>{{ __('Grandparent') }}</x-th>
                                <x-td>{{ $location->parent->parent->name ?? 'N/A' }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Created at') }}</x-th>
                                <x-td>{{ $location->created_at }}</x-td>
                            </x-tr>
                            <x-tr>
                                <x-th>{{ __('Updated at') }}</x-th>
                                <x-td>{{ $location->updated_at }}</x-td>
                            </x-tr>
                        </x-tbody>
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
