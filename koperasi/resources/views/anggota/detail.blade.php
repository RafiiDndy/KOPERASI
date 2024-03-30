<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="mb-8">
                @include('components.alert')
            </div>
            <div class="mb-8">
                @livewire('anggota.detail',['id' => $id])
            </div>
            <div class="grid grid-cols-2 gap-8">
                @livewire('simpanan.add',['id' => $id])
                @livewire('simpanan.withdraw',['id' => $id])
            </div>
            <div>
                @livewire('simpanan.catatan',['id' => $id])
            </div>
        </div>
    </div>
</x-app-layout>
