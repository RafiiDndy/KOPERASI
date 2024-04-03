<div class="card-withdraw animate__animated animate__bounceInRight">
  <div class="card-details-withdraw">
    <p class="text-title-withdraw">Withdraw</p>
    @if (Auth::user()->status_anggota != 'Not_verified' || Auth::user()->role == 'Pengurus')
        <div>
            Jumlah yang bisa diambil <br> 
            Pokok = Rp.{{ $available_balance_pokok }} <br>
            Wajib = Rp.{{ $available_balance_wajib }} <br>
            Sukarela = Rp.{{ $available_balance_sukarela }}
        </div>    
        <form wire:submit.prevent class="text-body-withdraw">
            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah:</label>
                <input type="text" id="jumlah" wire:model="jumlah" class="md:w-64 mt-1 p-2 block w-full border border-gray-300 rounded-md">
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
                    <option value="Sukarela">Sukarela</option>
                    @elseif (Auth::user()->status_anggota == 'Tidak Aktif')
                    <option value="Pokok">Pokok</option>
                    <option value="Wajib">Wajib</option>
                    <option value="Pokok">Pokok</option>
                    @endif
                </select>
            </div>
                <button class="card-button-withdraw" type="button" wire:click="withdraw">Withdraw</button>
        </form>
    @endif
    </div>
</div>
