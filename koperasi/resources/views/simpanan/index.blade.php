<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="mb-8">
                @include('components.alert')
            </div>
            <div class="text-center mb-8 text-xl font-bold">
                Nama: {{ Auth::user()->name }}
            </div>
            </div class="grid grid-cols-2 gap-8">
                @livewire('simpanan.add', ['id' => Auth::user()->id])
                @livewire('simpanan.withdraw', ['id' => Auth::user()->id])
        </div>
    </div>
</x-app-layout>
