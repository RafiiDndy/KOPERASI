<div class="flex justify-center">
    <div class="card-activity">
        <div class="text-center text-title-activity mb-4">Input Activity</div>
        <div class="mb-6">Silahkan isi aktivitas yang dilakukan oleh anggota.</div>
        <form class="space-y-6">
            <div class="card-details-activity">
                <div class="form-group-activity">
                    <label for="activity" class="block text-sm font-medium text-gray-700">Aktivitas:</label>
                    <textarea id="activity" name="activity" wire:model="activity" required
                        class="mt-1 p-2 block w-full border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-body-activity"></textarea>
                    @error('activity') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group-activity">
                    <label for="total_harga" class="block text-sm font-medium text-gray-700">Total Harga:</label>
                    <input class="mt-1 p-2 block w-full border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-body-activity" 
                        type="number" name="total_harga" id="total_harga" wire:model="total_harga" required>
                    @error('total_harga') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <button type="button" wire:click.prevent="pemasukan"
                class="card-button-activity w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline">
                Pemasukan
            </button>
        </form>
    </div>
</div>
