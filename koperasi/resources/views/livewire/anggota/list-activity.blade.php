<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp">
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Log Aktivitas</h2>
            </div>
            <div class="flex">
                <div class="relative">
                    <input wire:model.lazy="search" type="text" class="bg-gray-200 border-0 py-2 px-4 pr-16 rounded-lg text-sm focus:outline-none focus:ring-0 focus:ring-offset-0 focus:bg-gray" placeholder="Search...">
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
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('name')" class="cursor-pointer"> Nama @if($sortColumn === 'name') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('activity')" class="cursor-pointer"> Activity @if($sortColumn === 'activity') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('total_harga')" class="cursor-pointer"> Total Harga @if($sortColumn === 'total_harga') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('created_at')" class="cursor-pointer"> Tanggal Transaksi @if($sortColumn === 'created_at') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                    <tr class="border-b @switch($activity->status) @case('Verified') verified-row @break @case('menunggu verifikasi') pending-row @break @case('Rejected') rejected-row @break @default @endswitch">
                        <td class="py-2 px-4">{{ $activity->name }}</td>
                        <td class="py-2 px-4">{{ $activity->activity }}</td>
                        <td class="py-2 px-4">Rp.{{ number_format($activity->total_harga,2) }}</td>
                        <td class="py-2 px-4">{{ $activity->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $activities->links() }}
        </div>
    </div>
</div>