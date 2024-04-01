<x-app-layout>
    <div class="flex flex-wrap justify-center gap-5 mt-8">
        <a href="{{ route('VerifikasiAnggota') }}" class="rounded-lg border border-green-500 bg-green-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-green-700 hover:bg-green-700 focus:ring focus:ring-green-200 disabled:cursor-not-allowed disabled:border-green-300 disabled:bg-green-300">
            Verifikasi Anggota
        </a>
    </div>
    @livewire('anggota.show')
</x-app-layout>
