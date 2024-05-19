<div class="w-full max-w-2xl p-5 flex justify-between flex-row">
    <div class="card bg-gradient-to-r from-green-500 to-blue-800 rounded-lg p-6 flex items-center justify-between text-white shadow-lg w-1/2 mr-12">
        <div>
            <div class="text-2xl font-bold">
                Total SHU
            </div>
            <div class="text-lg">
                Rp.{{ number_format($shu) }}
            </div>
        </div>
        <div>
            <i class="fas fa-shopping-cart text-3xl"></i>
        </div>
    </div>
    <div class="card bg-gradient-to-r from-green-500 to-blue-800 rounded-lg p-6 flex items-center justify-between text-white shadow-lg w-1/2 mr-5">
        <div>
            <div class="text-2xl font-bold">
                Total Simpanan
            </div>
            <div class="text-lg">
                Rp.{{ number_format($totalSimpanan) }}
            </div>
        </div>
        <div>
            <i class="fas fa-wallet text-3xl"></i>
        </div>
    </div>
</div>
