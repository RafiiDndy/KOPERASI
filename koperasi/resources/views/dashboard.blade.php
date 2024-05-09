<x-app-layout>
    <div class="text-center mb-12 text-4xl font-bold">
        <div class="text-gray-500">Welcome,</div>
        {{ Auth::user()->name }}
    </div>
    <div class="px-8 pb-12 mx-auto md:px-12 lg:px-32 max-w-7xl animate__animated animate__fadeInD">
        <div class="grid grid-cols-2 text-sm font-medium text-gray-500 gap-x-2 gap-y-12 lg:grid-cols-3 lg:gap-y-16 text-balance ">
            <div>
                <div class="notification-card-dashboard">
                    <div class="notiglow-card-dashboard"></div>
                    <div class="notiborderglow-card-dashboard"></div>
                    <div class="notititle-card-dashboard">Total Anggota</div>
                    @if (Auth::user()->role == 'Pengurus')
                    <div class="notibody-card-dashboard">{{ @App\Models\User::query()->where('status_anggota','Aktif')->count() }} Anggota Aktif</div>
                    <div class="notibody-card-dashboard">{{ @App\Models\User::query()->where('status_anggota','Tidak Aktif')->count() }} Anggota Tidak Aktif</div>
                    @else
                    <div class="notibody-card-dashboard mt-3">{{ @App\Models\User::query()->where('status_anggota','Aktif')->count() }} Anggota Aktif</div>
                    @endif
                </div>
            </div>
            <div>
                <div class="notification-card-dashboard">
                    <div class="notiglow-card-dashboard"></div>
                    <div class="notiborderglow-card-dashboard"></div>
                    <div class="notititle-card-dashboard">Total Simpanan</div>
                    <div class="notibody-card-dashboard mt-3">Rp.{{ number_format(@App\Models\CatatanSimpanan::query()->where('status','Verified')->sum('jumlah')) }}</div>
                </div>
            </div>
            <div>
                <div class="notification-card-dashboard">
                    <div class="notiglow-card-dashboard"></div>
                    <div class="notiborderglow-card-dashboard"></div>
                    <div class="notititle-card-dashboard">Status</div>
                    @if (Auth::user()->role == 'Anggota')
                    <div class="notibody-card-dashboard mt-3">{{ @App\Models\User::query()->where('id',Auth::user()->id)->first(['status_anggota'])->status_anggota }}</div>
                    @else
                    <div class="notibody-card-dashboard mt-3">{{ @App\Models\User::query()->where('id',Auth::user()->id)->first(['role'])->role }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>