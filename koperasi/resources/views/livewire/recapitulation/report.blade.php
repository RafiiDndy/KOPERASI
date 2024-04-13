<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp">
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Report</h2>
            </div>
            <div class="flex">
                <div class="relative">
                    <input wire:model.lazy="dateStart" type="date" class="bg-gray-200 border-0 py-2 px-4 pr-8 rounded-lg text-sm focus:outline-none focus:ring-0 focus:ring-offset-0 focus:bg-white">
                    <input wire:model.lazy="dateEnd" type="date" class="bg-gray-200 border-0 py-2 px-4 pr-8 rounded-lg text-sm focus:outline-none focus:ring-0 focus:ring-offset-0 focus:bg-white">
                    <input wire:model.lazy="search" type="text" class="bg-gray-200 border-0 py-2 px-4 pr-16 rounded-lg text-sm focus:outline-none focus:ring-0 focus:ring-offset-0 focus:bg-white" placeholder="Search...">
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
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('id')" class="cursor-pointer"> ID @if($sortColumn === 'id') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('name')" class="cursor-pointer"> Name @if($sortColumn === 'name') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('email')" class="cursor-pointer"> Email @if($sortColumn === 'email') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> Total Pokok Deposited </th>
                        <th class="py-2 px-4 text-left"> Status Pokok </th>
                        <th class="py-2 px-4 text-left"> Total Wajib Deposited </th>
                        <th class="py-2 px-4 text-left"> Status Wajib </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->name }}</td>
                        <td>{{ $report->email }}</td>
                        <td>Rp.{{ number_format($report->total_pokok,2) }}</td>
                        <td class="border-b @switch($report->status_pokok) @case('Paid') verified-row @break @case('Unpaid') pending-row @default @endswitch">{{ $report->status_pokok }}</td>
                        <td>Rp.{{ number_format($report->total_wajib,2) }}</td>
                        <td class="border-b @switch($report->status_wajib) @case('Paid') verified-row @break @case('Unpaid') pending-row @default @endswitch">{{ $report->status_wajib }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $reports->links() }}
        </div>
    </div>
</div>