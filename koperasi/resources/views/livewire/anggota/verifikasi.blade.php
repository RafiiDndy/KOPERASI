<div class="container mx-auto px-4 pb-8 animate__animated animate__fadeInUp">
    <div id="imageModal" class="modal-image hidden">
        <span class="close-image">&times;</span>
        <img src="" id="imageSrc" alt="Cannot Load Image">
    </div>
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Data Anggota</h2>
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
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('name')" class="cursor-pointer"> Name @if($sortColumn === 'name') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('email')" class="cursor-pointer"> Email @if($sortColumn === 'email') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('nik')" class="cursor-pointer"> NIK @if($sortColumn === 'nik') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('no_hp')" class="cursor-pointer"> No Handphone @if($sortColumn === 'no_hp') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('status_anggota')" class="cursor-pointer"> Status Anggota @if($sortColumn === 'no_hp') @if($sortDirection === 'asc') &#8593; @else &#8595; @endif @endif </a> </th>
                        <th class="px-4 py-2">
                            <span>KTP</span>
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr wire:key="{{$user->id}}" class="border-b ">
                        <td class="py-2 px-4">{{ $user->name }}</td>
                        <td class="py-2 px-4">{{ $user->email }}</td>
                        <td class="py-2 px-4">{{ $user->nik }}</td>
                        <td class="py-2 px-4">{{ $user->no_hp }}</td>
                        <td class="py-2 px-4">{{ $user->status_anggota }}</td>
                        <td class="px-6 py-4 text-sm font-medium justify-center text-center">
                            <a class="view-image text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="storage/{{ $user->ktp_photo_path }}">View</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
                            <button dusk="approve" class="bg-green-100 text-green-600 px-4 py-2 rounded-full hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="verify_anggota({{ $user->id }})">
                                Approve
                            </button>
                            <div class="w-4"></div>
                            <button dusk="reject" class="bg-red-100 text-red-600 px-4 py-2 rounded-full hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="reject_anggota({{ $user->id }})">
                                Reject
                            </button>
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
</script>
