<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 py-6">
        @if (Auth::user()->status_anggota == 'Aktif' || Auth::user()->role == 'Pengurus')
        <div>
            Jumlah yang bisa diambil <br> 
            Pokok = Rp.{{ $available_balance_pokok }} <br>
            Wajib = Rp.{{ $available_balance_wajib }} <br>
            Sukarela = Rp.{{ $available_balance_sukarela }}
        </div>
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
                <button type="button" wire:click="withdraw" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">Withdraw</button>
            </div>
        </form>
        @else
        <form wire:submit.prevent="submit">
            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah:</label>
                <input type="text" readonly id="jumlah" wire:model="jumlah" class="mt-1 p-2 block w-full border border-gray-300 rounded-md bg-gray-100 cursor-not-allowed">
            </div>
            <div class="mb-4">
                <label for="jenis_simpanan" class="block text-sm font-medium text-gray-700">Jenis Simpanan:</label>
                <select id="jenis_simpanan" disabled wire:model="jenis_simpanan" class="mt-1 p-2 block w-full border border-gray-300 rounded-md bg-gray-100 cursor-not-allowed">
                    <option value="default">Pilih simpanan yang akan diambil!</option>
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
                <button type="button" disabled wire:click="withdraw" class="bg-red-500 disabled:bg-gray-200 hover:bg-red-600 text-white px-4 py-2 rounded-md cursor-not-allowed">Withdraw</button>
            </div>
        </form>

        @endif
    </div>
</div>
