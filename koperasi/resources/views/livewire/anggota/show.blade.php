<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp">
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Data Anggota</h2>
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
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('name')" class="cursor-pointer"> Name @if($sortColumn === 'name') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('email')" class="cursor-pointer"> Email @if($sortColumn === 'email') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('nik')" class="cursor-pointer"> NIK @if($sortColumn === 'nik') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('no_hp')" class="cursor-pointer"> No Handphone @if($sortColumn === 'no_hp') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('umur')" class="cursor-pointer"> Umur @if($sortColumn === 'umur') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('status_anggota')" class="cursor-pointer"> Status Anggota @if($sortColumn === 'status_anggota') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($users as $user) 
                    <tr class="border-b @switch($user->status_anggota) @case('Aktif') verified-row @break @case('Tidak Aktif') pending-row @break @case('Rejected') rejected-row @default @endswitch">
                        <td class="py-2 px-4">{{ $user->name }}</td>
                        <td class="py-2 px-4">{{ $user->email }}</td>
                        <td class="py-2 px-4">{{ $user->nik }}</td>
                        <td class="py-2 px-4">{{ $user->no_hp }}</td>
                        <td class="py-2 px-4">{{ $user->umur }} Tahun</td>
                        <td class="py-2 px-4">{{ $user->status_anggota }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
                            <a href="{{ route('Anggota.detail', $user->id) }}" class="rounded-full border border-blue-500 bg-blue-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-blue-700 hover:bg-blue-700 focus:ring focus:ring-blue-200 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300">
                                View
                            </a>
                        </td>
                    </tr> 
                    @endforeach 
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
</div>