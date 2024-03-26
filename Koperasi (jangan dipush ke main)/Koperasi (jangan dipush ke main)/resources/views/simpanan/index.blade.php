<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="mb-8">
                @include('components.alert')
            </div>
            <div class="mb-8">
                @livewire('anggota.detail', ['id' => Auth::user()->id])
            </div>
                @livewire('simpanan.add', ['id' => Auth::user()->id])
            <div>
                @livewire('simpanan.catatan', ['id' => Auth::user()->id])
            </div>
        </div>
    </div>
</x-app-layout>
