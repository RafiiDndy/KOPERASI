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
        <form enctype="multipart/form-data" class="text-body-deposit mt-6">
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
            <div class="mb-4" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label for="bukti_transfer" class="block text-sm font-medium text-gray-700">Upload Bukti Transfer:</label>
                <input type="file" id="bukti_transfer" wire:model="bukti_transfer" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['bukti_transfer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                <div x-show="isUploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            <button class="card-button-deposit" type="button" wire:click="deposit" data-confirm-delete>Deposit</button>
        </form>
    </div>
</div><?php /**PATH D:\PROJECT RPL\Koperasi Main\koperasi\resources\views/livewire/simpanan/add.blade.php ENDPATH**/ ?>