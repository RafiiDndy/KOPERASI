<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp">
    <div id="imageModal" class="modal-image hidden">
        <span class="close-image">&times;</span>
        <img src="" id="imageSrc" alt="Bukti Transfer">
    </div>
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Log Transaksi</h2>
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
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jumlah')" class="cursor-pointer"> Jumlah @if($sortColumn === 'jumlah') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jenis_simpanan')" class="cursor-pointer"> Jenis Simpanan @if($sortColumn === 'jenis_simpanan') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('status')" class="cursor-pointer"> Status @if($sortColumn === 'status') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('created_at')" class="cursor-pointer"> Tanggal Transaksi @if($sortColumn === 'created_at') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-center">Bukti Transfer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($simpanans as $simpanan)
                    <tr class="border-b @switch($simpanan->status) @case('Verified') verified-row @break @case('menunggu verifikasi') pending-row @break @case('Rejected') rejected-row @break @default @endswitch">
                        <td class="py-2 px-4">Rp.{{ number_format($simpanan->jumlah,2) }}</td>
                        <td class="py-2 px-4">{{ $simpanan->jenis_simpanan }}</td>
                        <td class="py-2 px-4">{{ $simpanan->status }}</td>
                        <td class="py-2 px-4">{{ $simpanan->created_at }}</td>
                        <td class="px-4 py-2 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
<<<<<<< HEAD
                            <a class="view-image" href="storage/{{ $simpanan->bukti_transfer }}">View</a>
=======
                            <a href="storage/{{ $simpanan->bukti_transfer }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2 view-image">
                                View
                            </a>
>>>>>>> 44ab0b14b1d71924d596eda4f1361aeda9115285
                        </td>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var imageModal = document.getElementById('imageModal');
        var closeImage = imageModal.querySelector('.close-image');
        var imageSrc = imageModal.querySelector('#imageSrc');

        document.querySelectorAll('.view-image').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var imageUrl = this.getAttribute('href');
                imageSrc.src = imageUrl;
                imageModal.style.display = 'block';
            });
        });

        closeImage.addEventListener('click', function() {
            imageModal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == imageModal) {
                imageModal.style.display = 'none';
            }
        });
    });
<<<<<<< HEAD
</script>
=======
</script>
>>>>>>> 44ab0b14b1d71924d596eda4f1361aeda9115285
