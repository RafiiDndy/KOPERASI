<div class="flex justify-center">
    <div class="w-full md:max-w-2xl p-5 flex justify-between flex-row">
        <div class="bg-gradient-to-r from-green-400 to-blue-500 rounded-lg p-6 flex items-center justify-between text-white shadow-lg w-1/2 mr-4">
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
        <div class="bg-gradient-to-r from-green-400 to-blue-500 rounded-lg p-6 flex items-center justify-between text-white shadow-lg w-1/2 mr-4">
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
</div>
