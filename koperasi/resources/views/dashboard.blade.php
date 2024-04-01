<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <hr>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/4">
                            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                <div class="font-bold text-xl mb-2">Kang Admin</div>
                                <ul class="list-disc list-inside">
                                    <li>Anggota: 14</li>
                                    <li>Pinjaman: Rp. 74.000.000</li>
                                    <li>Angsuran: Rp. 32.817.665</li>
                                    <li>Tabungan: Rp. 139.000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full md:w-3/4">
                            <div class="flex flex-wrap">
                                <div class="w-full md:w-1/2">
                                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                        <div class="font-bold text-xl mb-2">Master Data</div>
                                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                        <div class="font-bold text-xl mb-2">Transaksi</div>
                                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap">
                                <div class="w-full md:w-1/2">
                                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                        <div class="font-bold text-xl mb-2">Laporan</div>
                                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                        <div class="font-bold text-xl mb-2">Denda</div>
                                        <p class="">Rp. 0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap">
                                <div class="w-full">
                                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                        <div class="font-bold text-xl mb-2">Pengaturan</div>
                                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
