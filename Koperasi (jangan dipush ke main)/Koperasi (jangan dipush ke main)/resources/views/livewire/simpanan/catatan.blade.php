<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white shadow-md rounded p-6">
        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border border-gray-200">Jumlah</th>
                    <th class="py-2 px-4 border border-gray-200">Jenis Simpanan</th>
                    <th class="py-2 px-4 border border-gray-200">Status</th>
                    <th class="py-2 px-4 border border-gray-200">Tanggal Transaksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($simpanans as $simpanan)
                    <tr>
                        <td class="py-2 px-4 border border-gray-200">{{ $simpanan->jumlah }}</td>
                        <td class="py-2 px-4 border border-gray-200">{{ $simpanan->jenis_simpanan }}</td>
                        <td class="py-2 px-4 border border-gray-200">{{ $simpanan->status }}</td>
                        <td class="py-2 px-4 border border-gray-200">{{ $simpanan->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
