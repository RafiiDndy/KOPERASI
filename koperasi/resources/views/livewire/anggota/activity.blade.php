<div>
    <div class="flex justify-center">
        <div class="w-full md:max-w-xl p-6 bg-gray-200 rounded-lg">
            <div class="text-center mb-4 text-lg">Input Activity</div>
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="activity" class="block text-sm font-medium text-gray-700">Activity</label>
                        <textarea id="activity" name="activity" wire:model="activity" required rows="5"
                            class="mt-1 p-2 block w-full border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                        @error('activity') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                        <input type="number" name="amount" id="amount" wire:model="amount" required
                            class="mt-1 p-2 block w-full border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        @error('amount') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button type="button" wire:click.prevent="addActivity"
                    class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline">
                    Add Activity
                </button>
            </form>
        </div>
    </div>
</div>
