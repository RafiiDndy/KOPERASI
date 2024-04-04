<div class="card-deposit animate__animated animate__bounceInLeft">
  <div class="card-details-deposit px-4 py-4">
    <p class="text-title-deposit text-xl mb-4">Deposit</p>
    <!--[if BLOCK]><![endif]--><?php if(!$isPokokPaid): ?>
    <div>
        Silahkan Lakukan Deposit Simpanan Pokok Sebesar Rp.1.000.000 untuk Anggota Baru!
    </div>
    <?php elseif(!$isWajibPaid): ?>
    <div>
        Silahkan Lakukan Deposit Simpanan Wajib Sebesar Rp.100.000 untuk bulan ini!
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <form wire:submit.prevent class="text-body-deposit mt-6">
        <div class="mb-4">
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah:</label>
            <input type="text" id="jumlah" wire:model="jumlah" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="jenis_simpanan" class="block text-sm font-medium text-gray-700">Jenis Simpanan:</label>
            <select id="jenis_simpanan" wire:model="jenis_simpanan" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                <option hidden>Silahkan pilih jenis simpanan!</option>
                <!--[if BLOCK]><![endif]--><?php if(Auth::user()->status_anggota != 'Tidak Aktif'): ?>
                    <!--[if BLOCK]><![endif]--><?php if(!$isPokokPaid): ?>
                    <option value="Pokok">Pokok</option>
                    <?php elseif(!$isWajibPaid): ?>
                    <option value="Wajib">Wajib</option>
                    <option value="Sukarela">Sukarela</option>
                    <?php else: ?>
                    <option value="Sukarela">Sukarela</option>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </select>
        </div>
            <button class="card-button-deposit" type="button" wire:click="deposit" data-confirm-delete >Deposit</button>
    </form>
  </div>
</div><?php /**PATH D:\PROJECT RPL\Koperasi Main\koperasi\resources\views/livewire/simpanan/add.blade.php ENDPATH**/ ?>