<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="mb-8">
                @livewire('anggota.detail',['id' => $id])
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="lg:w-1/2 px-3 mb-6 lg:mb-0">
                    @livewire('simpanan.add', ['id' => $id])
                </div>
                <div class="lg:w-1/2 px-3">
                    @livewire('simpanan.withdraw', ['id' => $id])
                </div>
            </div>
        </div>
        <div class="mt-8">
        @livewire('simpanan.catatan', ['id' => $id])
        </div>
    </div>
</x-app-layout>
