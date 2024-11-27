<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tenants') }}
            </h2>
            <a href="{{ route('tenants.create') }}"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                {{ __('Create Tenant') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-4 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg overflow-hidden">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-medium text-gray-900 mb-6">
                        {{ __('Tenant List') }}
                    </h1>

                    <!-- Search Box -->
                    <div class="flex justify-end mb-4">
                        <input type="text" id="search" placeholder="Search by name, email, or domain..."
                            class="px-4 py-2 border rounded-l-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <button id="searchButton"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm rounded-r-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500">
                            {{ __('Search') }}
                        </button>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-full divide-y divide-gray-200 table-auto text-center">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Company Name') }}
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Name') }}
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Email') }}
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Domains') }}
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($tenants as $tenant)
                                    <tr class="tenant-row">
                                        <td class="px-6 py-4 text-sm text-gray-900">
                                            {{ $tenant->company_name ?? '-' }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900">
                                            {{ $tenant->name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900">
                                            {{ $tenant->email }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900">
                                            @if ($tenant->domains->isNotEmpty())
                                                <ul class="list-disc list-inside">
                                                    @foreach ($tenant->domains as $domain)
                                                        <li><a target="_blank" href="{{ $domain->domain . ':8000' }}"
                                                                class="text-indigo-600 hover:underline">
                                                                {{ $domain->domain }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <span class="text-gray-500">{{ __('No Domains') }}</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900">
                                            <div class="flex justify-center items-center space-x-4">
                                                <!-- Edit Button -->
                                                <a href="{{ route('tenants.edit', $tenant->id) }}"
                                                    class="inline-block px-4 py-2 text-gray bg-blue-500 rounded hover:bg-blue-600">
                                                    {{ __('Edit') }}
                                                </a>

                                                <!-- Delete Form -->
                                                <form action="{{ route('tenants.destroy', $tenant->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('{{ __('Are you sure you want to delete this tenant?') }}');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-block px-4 py-2 text-gray bg-red-500 rounded hover:bg-red-600">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </td>


                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                            {{ __('No tenants found.') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4 flex justify-end">
                        {{ $tenants->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const searchButton = document.getElementById('searchButton');
            const rows = document.querySelectorAll('.tenant-row');

            const filterTable = () => {
                const filter = searchInput.value.toLowerCase();
                rows.forEach(row => {
                    const textContent = Array.from(row.querySelectorAll('td')).map(col => col
                        .textContent.toLowerCase());
                    row.style.display = textContent.some(content => content.includes(filter)) ? '' :
                        'none';
                });
            };

            searchInput.addEventListener('input', filterTable);
            searchButton.addEventListener('click', filterTable);
        });
    </script>
</x-app-layout>
