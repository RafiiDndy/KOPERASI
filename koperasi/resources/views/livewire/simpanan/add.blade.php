<div class="card-deposit animate__animated animate__bounceInLeft">
  <div class="card-details-deposit">
    <p class="text-title-deposit">Deposit</p>
    <form wire:submit.prevent class="text-body-deposit">
            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah:</label>
                <input type="text" id="jumlah" wire:model="jumlah" class="mt-1 p-2 block w-full md:w-64 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="jenis_simpanan" class="block text-sm font-medium text-gray-700">Jenis Simpanan:</label>
                <select id="jenis_simpanan" wire:model="jenis_simpanan" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    <option hidden>Silahkan pilih jenis simpanan!</option>
                    @if (Auth::user()->status_anggota == 'Aktif')
                        @if (!$isPokok)
                        <option value="Pokok">Pokok</option>
                        @elseif (!$isWajibDeposit)
                        <option value="Wajib">Wajib</option>
                        <option value="Sukarela">Sukarela</option>
                        @else
                        <option value="Sukarela">Sukarela</option>
                        @endif
                    @endif
                </select>
            </div>
                <button class="card-button-deposit" type="button" wire:click="deposit">Deposit</button>
        </form>
  </div>
</div>