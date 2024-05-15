<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="mt-8">
            <div class="flex justify-center">
                @livewire('anggota.expense', ['id' => Auth::user()->id])
            </div>
        </div>
        <div class="mt-8">
            @livewire('anggota.list-activity', ['id' => Auth::user()->id])
        </div>
    </div>
</x-app-layout>
