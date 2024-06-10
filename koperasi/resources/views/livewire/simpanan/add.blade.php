<div class="card-deposit animate__animated animate__bounceInLeft">
    <div class="card-details-deposit px-4 py-4">
        <p class="text-title-deposit text-xl">Deposit</p>
        @if (!$isPokokPaid)
        <div>
            Silahkan Lakukan Deposit Simpanan Pokok Sebesar Rp.1.000.000 untuk Anggota Baru!
        </div>
        @elseif (!$isWajibPaid)
        <div>
            Silahkan Lakukan Deposit Simpanan Wajib Sebesar Rp.100.000 untuk bulan ini!
        </div>
        @endif
<<<<<<< HEAD
        <form enctype="multipart/form-data" class="text-body-deposit mt-4">
            <div class="mb-4">
=======
        <form enctype="multipart/form-data" class="text-body-deposit mt-6">
            <div dusk="jumlah" class="mb-4">
>>>>>>> 0d3dae29cd276b033af984a353ef544837f60732
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah:</label>
                <input type="text" id="jumlah" name="jumlah" wire:model="jumlah" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" >
                @error('jumlah') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="jenis_simpanan" class="block text-sm font-medium text-gray-700">Jenis Simpanan:</label>
                <select id="jenis_simpanan" name="jenis_simpanan" wire:model="jenis_simpanan" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    <option hidden>Silahkan pilih jenis simpanan!</option>
                    @if (Auth::user()->status_anggota != 'Tidak Aktif')
                    @if (!$isPokokPaid)
                    <option value="Pokok">Pokok</option>
                    @else
                    <option value="Wajib">Wajib</option>
                    <option value="Sukarela">Sukarela</option>
                    @endif
                    @endif
                </select>
                @error('jenis_simpanan') <span class="error">{{ $message }}</span> @enderror
                @if ($isPokokPaid && (Auth::user()->status_anggota == 'Aktif' || Auth::user()->role == 'Pengurus'))
                <div class="flex mt-4">
                    <div class="mr-4 w-1/2">
                        <label for="month" class="block text-sm font-medium text-gray-700">Bulan</label>
                        <select id="month" name="month" wire:model="month" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                            <option hidden>Untuk Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        @error('month') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-1/2">
                        <label for="year" class="block text-sm font-medium text-gray-700">Tahun</label>
                        <select id="year" name="year" wire:model="year" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                            <option hidden>Untuk Tahun</option>
                            @for ($i = 2020; $i <= date('Y'); $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                        @error('year') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                @endif
            </div>
            <div class="mb-4" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label for="bukti_transfer" class="block text-sm font-medium text-gray-700">Upload Bukti Transfer:</label>
                <input type="file" name="bukti_transfer" id="bukti_transfer" wire:model="bukti_transfer" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                @error('bukti_transfer') <span class="error">{{ $message }}</span> @enderror
                <div x-show="isUploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            <button class="card-button-deposit" type="button" wire:click="deposit" data-confirm-delete>Deposit</button>
        </form>
    </div>
</div>