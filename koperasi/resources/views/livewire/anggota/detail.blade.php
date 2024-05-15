<div class="container mx-auto p-2">
    @foreach($users as $user)
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-4 animate__animated animate__fadeInUp">
        <div class="px-4 py-5 bg-gradient-to-r from-cyan-600 to-cyan-700 text-white sm:px-6 animate__animated animate__fadeInDown">
            <h3 class="text-lg font-semibold">Profile Information</h3>
            <p class="mt-1 text-sm opacity-80">Personal details and application.</p>
        </div>
<<<<<<< HEAD
        <div id="imageModal" class="modal-image hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 overflow-auto">
=======
        <div id="imageKtp" class="modal-image hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 overflow-auto">
>>>>>>> 969ec6ec70ff2562a6f157cef7e2998ad3b6429a
            <span class="close-image absolute top-4 right-4 text-white text-2xl cursor-pointer transition-colors duration-200 hover:text-red-500">&times;</span>
            <img src="" id="imageSrc" alt="Cannot Load Image" class="max-w-full h-auto mx-auto mt-12 rounded-lg shadow-lg animate__animated animate__zoomIn">
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Profile Photo</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                        <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="w-32 h-32 rounded-full object-cover transition-transform duration-300 hover:scale-105 shadow-lg animate__animated animate__pulse animate__infinite animate__slower">
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Full name</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $user->name }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Email address</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $user->email }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">NIK</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $user->nik }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">No Handphone</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $user->no_hp }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Status Anggota</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $user->status_anggota }}</dd>
                </div>
                @if (Auth::user()->role === 'Pengurus')
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <button wire:click="remove_anggota({{$user->id}})" class="bg-gradient-to-r from-red-500 to-red-700 text-white px-4 py-2 rounded hover:from-red-600 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition-colors duration-200 transform hover:scale-105 animate__animated animate__pulse animate__infinite animate__slower">
                        Non-Aktifkan Anggota
                    </button>
                </div>
                @endif
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
<<<<<<< HEAD
                    <a class="view-image text-white bg-gradient-to-r from-cyan-600 to-cyan-700 hover:from-cyan-700 hover:to-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none transition-colors duration-200 transform hover:scale-105" href="/storage/{{$user->ktp_photo_path}}">View KTP</a>
=======
                    <a class="view-image-ktp text-white bg-gradient-to-r from-cyan-600 to-cyan-700 hover:from-cyan-700 hover:to-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none transition-colors duration-200 transform hover:scale-105" href="/storage/{{$user->ktp_photo_path}}">View KTP</a>
>>>>>>> 969ec6ec70ff2562a6f157cef7e2998ad3b6429a
                </div>
            </dl>
        </div>
    </div>
    @endforeach
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
<<<<<<< HEAD
        var imageModal = document.getElementById('imageModal');
        var closeImage = imageModal.querySelector('.close-image');
        var imageSrc = imageModal.querySelector('#imageSrc');

        document.querySelectorAll('.view-image').forEach(function(link) {
=======
        var imageModal = document.getElementById('imageKtp');
        var closeImage = imageModal.querySelector('.close-image');
        var imageSrc = imageModal.querySelector('#imageSrc');

        document.querySelectorAll('.view-image-ktp').forEach(function(link) {
>>>>>>> 969ec6ec70ff2562a6f157cef7e2998ad3b6429a
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var imageUrl = this.getAttribute('href');
                imageSrc.src = imageUrl;
                imageModal.style.display = 'block';
                document.body.classList.add('overflow-hidden');
            });
        });

        closeImage.addEventListener('click', function() {
            imageModal.style.display = 'none';
            document.body.classList.remove('overflow-hidden');
        });

        window.addEventListener('click', function(event) {
            if (event.target == imageModal) {
                imageModal.style.display = 'none';
                document.body.classList.remove('overflow-hidden');
            }
        });

        window.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && imageModal.style.display === 'block') {
                imageModal.style.display = 'none';
                document.body.classList.remove('overflow-hidden');
            }
        });
    });
</script>