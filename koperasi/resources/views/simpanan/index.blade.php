<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-12 text-4xl font-bold">
                <div class="text-gray-500">Simpanan,</div>
                {{ Auth::user()->name }}
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="lg:w-1/2 px-3 mb-6 lg:mb-0">
                    @livewire('simpanan.add', ['id' => Auth::user()->id])
                </div>
                <div class="lg:w-1/2 px-3">
                    @livewire('simpanan.withdraw', ['id' => Auth::user()->id])
                </div>
            </div>
        </div>
        <div class="mt-8">
            @livewire('simpanan.catatan', ['id' => Auth::user()->id])
        </div>
    </div>
</x-app-layout>