<x-app-layout>
    <div class="flex flex-wrap justify-center gap-5 mt-8">
        <a href="{{ route('Anggota.index') }}" class="rounded-lg border border-blue-500 bg-blue-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-blue-700 hover:bg-blue-700 focus:ring focus:ring-blue-200 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300">
            Daftar Anggota
        </a>
    </div>
    @livewire('Anggota.verifikasi')
</x-app-layout>
