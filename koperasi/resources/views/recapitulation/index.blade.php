<x-app-layout>
    <div class="container mx-auto px-4 ">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-12 text-4xl font-bold">
                <div class="text-gray-500">Recapitulation</div>
            </div>
        </div>
        <div class="mt-8">
            @livewire('recapitulation.show')
        </div>
        <div class="mt-8">
            @livewire('recapitulation.report-pokok')
        </div>
        <div class="mt-8">
            @livewire('recapitulation.report-wajib')
        </div>
        <div class="mt-8">
            @livewire('recapitulation.report-sukarela')
        </div>
        <div class="mt-8">
            @livewire('recapitulation.list-unpaid-pokok')
        </div>
        <div class="mt-8">
            @livewire('recapitulation.list-unpaid-wajib')
        </div>
    </div>
</x-app-layout>