<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex flex-col md:flex-row justify-between items-center mb-4">
            <div class="mb-4 md:mb-0">
                <h2 class="text-2xl font-bold text-gray-800">List Unpaid</h2>
            </div>
            <div class="flex flex-wrap">
                <div class="mr-4 mb-2">
                    <input wire:model.lazy="dateStart" type="date" class="bg-gray-200 border-0 py-2 px-4 pr-8 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:bg-white" placeholder="Start Date">
                    <input wire:model.lazy="dateEnd" type="date" class="bg-gray-200 border-0 py-2 px-4 pr-8 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:bg-white" placeholder="End Date">
                </div>
                <div class="flex items-center mb-4">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input wire:model.lazy="search" type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search" />
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                            <a wire:click.prevent="sort('id')" class="cursor-pointer">
                                ID
                                @if($sortColumn === 'id')
                                @if($sortDirection === 'asc')
                                &#8593;
                                @else
                                &#8595;
                                @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                            <a wire:click.prevent="sort('name')" class="cursor-pointer">
                                Name
                                @if($sortColumn === 'name')
                                @if($sortDirection === 'asc')
                                &#8593;
                                @else
                                &#8595;
                                @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                            <a wire:click.prevent="sort('no_hp')" class="cursor-pointer">
                                No Handphone
                                @if($sortColumn === 'no_hp')
                                @if($sortDirection === 'asc')
                                &#8593;
                                @else
                                &#8595;
                                @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Total Pokok Deposited</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Status Pokok</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Total Wajib Deposited</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Status Wajib</th>
                        <th class="text-center text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($reports as $report)
                    @if ($report->status_pokok == 'Unpaid' || $report->status_wajib == 'Unpaid')
                    <tr class="animate__animated animate__fadeInUp">
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">{{ $report->id }}</td>
                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">{{ $report->name }}</td>
                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">{{ $report->no_hp }}</td>
                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">Rp.{{ number_format($report->total_pokok,2) }}</td>
                        <td class="text-center text-sm text-gray-500 whitespace-nowrap border-b @switch($report->status_pokok) @case('Paid') bg-green-100 text-green-700 @break @case('Unpaid') bg-red-100 text-red-700 @default @endswitch">{{ $report->status_pokok }}</td>
                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">Rp.{{ number_format($report->total_wajib,2) }}</td>
                        <td class="text-center text-sm text-gray-500 whitespace-nowrap border-b @switch($report->status_wajib) @case('Paid') bg-green-100 text-green-700 @break @case('Unpaid') bg-red-100 text-red-700 @default @endswitch">{{ $report->status_wajib }}</td>
                        <td>
                            <button class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 transition-colors duration-200 mx-2 my-4 shadow-md font-open-sans" wire:click="sendWhatsAppMessage('{{ $report->status_pokok }}', '{{number_format($report->total_pokok,2)}}', '{{ $report->status_wajib }}', '{{number_format($report->total_wajib,2)}}', '{{$report->no_hp}}', '{{$report->name}}', '{{$report->nik}}')">
                                Kirim Notifikasi
                            </button>
                        </td>
                    </tr>
                    @endif
                    @empty
                    <tr>
                        <td colspan="8" class="py-4 px-6 text-center">No records found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $reports->links() }}
        </div>
    </div>
</div>