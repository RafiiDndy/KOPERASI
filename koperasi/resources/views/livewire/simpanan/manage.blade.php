<div class="container mx-auto px-4 animate__animated animate__fadeInUp">
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Data Simpanan</h2>
            </div>
            <div class="flex">
                <div class="relative"> 
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
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('id')" class="cursor-pointer"> User ID @if($sortColumn === 'id') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('name')" class="cursor-pointer"> Name @if($sortColumn === 'name') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jumlah')" class="cursor-pointer"> Jumlah @if($sortColumn === 'jumlah') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jenis_simpanan')" class="cursor-pointer"> Jenis Simpanan @if($sortColumn === 'jenis_simpanan') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('created_at')" class="cursor-pointer"> Tanggal Transaksi @if($sortColumn === 'created_at') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('status')" class="cursor-pointer"> Status @if($sortColumn === 'status') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th scope="col" class="px-6 py-4">
                        <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($catatanSimpananUsers as $user) 
                    <tr class="border-b">
                        <td class="py-2 px-4">{{ $user->id }}</td>
                        <td class="py-2 px-4">{{ $user->name }}</td>
                        <td class="py-2 px-4">Rp.{{ number_format($user->jumlah,2) }}</td>
                        <td class="py-2 px-4">{{ $user->jenis_simpanan }}</td>
                        <td class="py-2 px-4">{{ $user->created_at }}</td>
                        <td class="py-2 px-4">{{ $user->status }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
                            <button class="bg-green-100 text-green-600 px-4 py-2 rounded-full hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="verify_simpanan({{ $user->id_simpanan }}, {{$user->id}})">
                                Verifikasi
                            </button>
                            <div class="w-4"></div>
                            <button class="bg-red-100 text-red-600 px-4 py-2 rounded-full hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="reject_simpanan({{ $user->id_simpanan }}, {{$user->id}})">
                                Reject
                            </button>
                        </td>
                    </tr> 
                    @endforeach 
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $catatanSimpananUsers->links() }}
        </div>
    </div>
</div>