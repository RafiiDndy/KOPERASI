<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp">
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">List Unpaid</h2>
            </div>
            <div class="flex">
                <div class="relative">
                    <input wire:model.lazy="dateStart" type="date" class="bg-gray-200 border-0 py-2 px-4 pr-8 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:bg-white" placeholder="Start Date">
                    <input wire:model.lazy="dateEnd" type="date" class="bg-gray-200 border-0 py-2 px-4 pr-8 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:bg-white" placeholder="End Date">
                    <input wire:model.lazy="search" type="text" class="bg-gray-200 border-0 py-2 px-4 pr-16 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:bg-white" placeholder="Search...">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left">
                            <a wire:click.prevent="sort('id')" class="cursor-pointer flex items-center">
                                ID
                                @if($sortColumn === 'id')
                                    @if($sortDirection === 'asc')
                                        <span class="ml-2">&#8593;</span>
                                    @else
                                        <span class="ml-2">&#8595;</span>
                                    @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-2 px-4 text-left">
                            <a wire:click.prevent="sort('name')" class="cursor-pointer flex items-center">
                                Name
                                @if($sortColumn === 'name')
                                    @if($sortDirection === 'asc')
                                        <span class="ml-2">&#8593;</span>
                                    @else
                                        <span class="ml-2">&#8595;</span>
                                    @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-2 px-4 text-left">
                            <a wire:click.prevent="sort('no_hp')" class="cursor-pointer flex items-center">
                                No Handphone
                                @if($sortColumn === 'no_hp')
                                    @if($sortDirection === 'asc')
                                        <span class="ml-2">&#8593;</span>
                                    @else
                                        <span class="ml-2">&#8595;</span>
                                    @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-2 px-4 text-left">Total Pokok Deposited</th>
                        <th class="py-2 px-4 text-left">Status Pokok</th>
                        <th class="py-2 px-4 text-left">Total Wajib Deposited</th>
                        <th class="py-2 px-4 text-left">Status Wajib</th>
                        <th class="py-2 px-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reports as $report)
                        @if ($report->status_pokok == 'Unpaid' || $report->status_wajib == 'Unpaid')
                            <tr class="animate__animated animate__fadeInUp">
                                <td>{{ $report->id }}</td>
                                <td>{{ $report->name }}</td>
                                <td>{{ $report->no_hp }}</td>
                                <td>Rp.{{ number_format($report->total_pokok,2) }}</td>
                                <td class="border-b @switch($report->status_pokok) @case('Paid') bg-green-100 text-green-700 @break @case('Unpaid') bg-red-100 text-red-700 @default @endswitch">{{ $report->status_pokok }}</td>
                                <td>Rp.{{ number_format($report->total_wajib,2) }}</td>
                                <td class="border-b @switch($report->status_wajib) @case('Paid') bg-green-100 text-green-700 @break @case('Unpaid') bg-red-100 text-red-700 @default @endswitch">{{ $report->status_wajib }}</td>
                                <td>
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 transition-colors duration-200 mx-2 my-4 shadow-md font-open-sans" wire:click="sendWhatsAppMessage('{{ $report->status_pokok }}', '{{number_format($report->total_pokok,2)}}', '{{ $report->status_wajib }}', '{{number_format($report->total_wajib,2)}}', '{{$report->no_hp}}', '{{$report->name}}', '{{$report->nik}}')">
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