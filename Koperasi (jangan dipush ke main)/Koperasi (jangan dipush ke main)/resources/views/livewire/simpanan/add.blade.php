<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 py-6">
        @if (Auth::user()->status_anggota == 'Not_verified')
        <div class='mb-8'>
            Silahkan Lakukan Deposit Simpanan Pokok Sebesar Rp.100.000 untuk Anggota Baru!
        </div>
        @endif
        <form wire:submit.prevent>
            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah:</label>
                <input type="text" id="jumlah" wire:model="jumlah" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="jenis_simpanan" class="block text-sm font-medium text-gray-700">Jenis Simpanan:</label>
                <select id="jenis_simpanan" wire:model="jenis_simpanan" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    <option hidden>Silahkan pilih jenis simpanan!</option>
                    @if (Auth::user()->role == 'Pengurus')
                    <option value="Pokok">Pokok</option>
                    <option value="Wajib">Wajib</option>
                    <option value="Sukarela">Sukarela</option>
                    @elseif (Auth::user()->status_anggota == 'Aktif')
                    <option value="Wajib">Wajib</option>
                    <option value="Sukarela">Sukarela</option>
                    @elseif (Auth::user()->status_anggota == 'Not_verified')
                    <option value="Pokok">Pokok</option>
                    @endif
                </select>
            </div>
            <div class="flex justify-end">
                <!-- Button for Deposit -->
                <button type="button" wire:click="deposit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md mr-2">Deposit</button>
            </div>
        </form>
    </div>
</div>
