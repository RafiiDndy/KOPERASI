
<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto mb-8">
        <div class="card-recap">
            <div class="bg-recap rounded-t-lg">
                <h2 class="text-2xl font-bold text-gray-800 p-4 text-center">Pokok</h2>
                <div class="pl-4 text-gray-600"><b>From:</b> {{ $dateStarts }}</div>
                <div class="pl-4 text-gray-600"><b>To:</b> {{ $dateEnds }}</div>
                <div class="p-4 text-gray-600"><b>Total:</b></div>
                <div class="pl-4 text-gray-600">Rp. {{ number_format($totalPokok,2) }}</div>
            </div>
            <div class="blob-recap rounded-b-lg"></div>
        </div>
        <div class="card-recap">
            <div class="bg-recap rounded-t-lg">
                <h2 class="text-2xl font-bold text-gray-800 p-4 text-center">Wajib</h2>
                <div class="pl-4 text-gray-600"><b>From:</b> {{ $dateStarts }}</div>
                <div class="pl-4 text-gray-600"><b>To:</b> {{ $dateEnds }}</div>
                <div class="p-4 text-gray-600"><b>Total:</b></div>
                <div class="pl-4 text-gray-600">Rp. {{ number_format($totalWajib,2) }}</div>
            </div>
            <div class="blob-recap rounded-b-lg"></div>
        </div>
        <div class="card-recap">
            <div class="bg-recap rounded-t-lg">
                <h2 class="text-2xl font-bold text-gray-800 p-4 text-center">Sukarela</h2>
                <div class="pl-4 text-gray-600"><b>From:</b> {{ $dateStarts }}</div>
                <div class="pl-4 text-gray-600"><b>To:</b> {{ $dateEnds }}</div>
                <div class="p-4 text-gray-600"><b>Total:</b></div>
                <div class="pl-4 text-gray-600">Rp. {{ number_format($totalSukarela,2) }}</div>
            </div>
            <div class="blob-recap rounded-b-lg"></div>
        </div>
    </div>
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Details</h2>
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
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jumlah')" class="cursor-pointer"> Jumlah @if($sortColumn === 'jumlah') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jenis_simpanan')" class="cursor-pointer"> Jenis Simpanan @if($sortColumn === 'jenis_simpanan') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('status')" class="cursor-pointer"> Status @if($sortColumn === 'status') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('bulan')" class="cursor-pointer"> Bulan @if($sortColumn === 'bulan') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('created_at')" class="cursor-pointer"> Tanggal Transaksi @if($sortColumn === 'created_at') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recapitulation as $recap)
                        <tr>
                            <td>{{ $recap->id }}</td>
                            <td>{{ $recap->name }}</td>
                            <td>{{ $recap->email }}</td>
                            <td>Rp.{{ number_format($recap->jumlah,2) }}</td>
                            <td>{{ $recap->jenis_simpanan }}</td>
                            <td>{{ $recap->status }}</td>
                            <td>{{ \Carbon\Carbon::parse($recap->bulan)->format('F Y') }}</td>
                            <td>{{ $recap->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $recapitulation->links() }}
        </div>
    </div>
</div>