<div class="container mx-auto p-2">
    @foreach($users as $user)
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-4 animate__animated animate__fadeInUp">
        <div class="px-4 py-5 bg-gradient-to-r from-cyan-600 to-cyan-700 text-white sm:px-6 animate__animated animate__fadeInDown">
            <h3 class="text-lg font-semibold">Support Information</h3>
            <p class="mt-1 text-sm opacity-80">Panduan and Cara.</p>
        </div>
        <div id="imageKtp" class="modal-image hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 overflow-auto">
            <span class="close-image absolute top-4 right-4 text-white text-2xl cursor-pointer transition-colors duration-200 hover:text-red-500">&times;</span>
            <img src="" id="imageSrc" alt="Cannot Load Image" class="max-w-full h-auto mx-auto mt-12 rounded-lg shadow-lg animate__animated animate__zoomIn">
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nama Support</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $user->nama_support }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Detail</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $user->detail }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Panduan</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $user->Panduan }}</dd>
                </div>
                @if (Auth::user()->role === 'Pengurus')
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <button wire:click="remove_anggota({{$user->id}})" class="bg-gradient-to-r from-red-500 to-red-700 text-white px-4 py-2 rounded hover:from-red-600 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition-colors duration-200 transform hover:scale-105 animate__animated animate__pulse animate__infinite animate__slower">
                        Non-Aktifkan Anggota
                    </button>
                </div>
                @endif
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <a class="view-image-ktp text-white bg-gradient-to-r from-cyan-600 to-cyan-700 hover:from-cyan-700 hover:to-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none transition-colors duration-200 transform hover:scale-105" href="/storage/{{$user->ktp_photo_path}}">View Gambar Panduan</a>
                </div>
            </dl>
        </div>
    </div>
    @endforeach
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var imageModal = document.getElementById('imageKtp');
        var closeImage = imageModal.querySelector('.close-image');
        var imageSrc = imageModal.querySelector('#imageSrc');

        document.querySelectorAll('.view-image-ktp').forEach(function(link) {
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