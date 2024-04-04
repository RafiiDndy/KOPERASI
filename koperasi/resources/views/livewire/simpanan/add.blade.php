<div class="card-deposit animate__animated animate__bounceInLeft">
  <div class="card-details-deposit px-4 py-4">
    <p class="text-title-deposit text-xl mb-4">Deposit</p>
    @if (!$isPokokPaid)
    <div>
        Silahkan Lakukan Deposit Simpanan Pokok Sebesar Rp.1.000.000 untuk Anggota Baru!
    </div>
    @elseif (!$isWajibPaid)
    <div>
        Silahkan Lakukan Deposit Simpanan Wajib Sebesar Rp.100.000 untuk bulan ini!
    </div>
    @endif
    <form wire:submit.prevent class="text-body-deposit mt-6">
        <div class="mb-4">
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah:</label>
            <input type="text" id="jumlah" wire:model="jumlah" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="jenis_simpanan" class="block text-sm font-medium text-gray-700">Jenis Simpanan:</label>
            <select id="jenis_simpanan" wire:model="jenis_simpanan" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                <option hidden>Silahkan pilih jenis simpanan!</option>
                @if (Auth::user()->status_anggota != 'Tidak Aktif')
                    @if (!$isPokokPaid)
                    <option value="Pokok">Pokok</option>
                    @elseif (!$isWajibPaid)
                    <option value="Wajib">Wajib</option>
                    <option value="Sukarela">Sukarela</option>
                    @else
                    <option value="Sukarela">Sukarela</option>
                    @endif
                @endif
            </select>
        </div>
            <button class="card-button-deposit" type="button" wire:click="deposit" data-confirm-delete >Deposit</button>
    </form>
  </div>
</div>