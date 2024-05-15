<div class="form-container-activity">
    <h2 class="text-2xl font-bold text-center">Input Activity</h2>
    <form class="form-activity">
        <div class="form-group-activity">
            <label for="user_id">Aktivitas</label>
            <textarea id="activity" name="activity" wire:model="activity" required></textarea>
            @error('activity') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group-activity">
            <label for="total_harga">Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" wire:model="total_harga" required>
            @error('total_harga') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button class="form-submit-btn-activity" type="button" wire:click.prevent="pemasukan">Pemasukan</button>
    </form>
</div>