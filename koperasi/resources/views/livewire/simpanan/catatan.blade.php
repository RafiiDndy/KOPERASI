<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp">
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Data Simpanan</h2>
            </div>
            <div class="flex">
                <div class="relative"> 
                    <input wire:model.lazy="search" type="text" class="bg-gray-200 border-0 py-2 px-4 pr-16 rounded-lg text-sm focus:outline-none focus:ring-0 focus:ring-offset-0 focus:bg-white" placeholder="Search...">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none"> 
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                            <path d="M9 11L15 15" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path d="M15 9H9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg> 
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jumlah')" class="cursor-pointer"> Jumlah @if($sortColumn === 'jumlah') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jenis_simpanan')" class="cursor-pointer"> Jenis Simpanan @if($sortColumn === 'jenis_simpanan') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('status')" class="cursor-pointer"> Status @if($sortColumn === 'status') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('created_at')" class="cursor-pointer"> Tanggal Transaksi @if($sortColumn === 'created_at') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($simpanans as $simpanan) 
                    <tr class="border-b @switch($simpanan->status) @case('Verified') verified-row @break @case('menunggu verifikasi') pending-row @break @case('Rejected') rejected-row @break @default @endswitch">
                        <td class="py-2 px-4">{{ $simpanan->jumlah }}</td>
                        <td class="py-2 px-4">{{ $simpanan->jenis_simpanan }}</td>
                        <td class="py-2 px-4">{{ $simpanan->status }}</td>
                        <td class="py-2 px-4">{{ $simpanan->created_at }}</td>
                    </tr> 
                    @endforeach 
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $simpanans->links() }}
        </div>
    </div>
</div>