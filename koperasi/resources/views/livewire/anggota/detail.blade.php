<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    @foreach($users as $user)
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Profile Information</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and application.</p>
    </div>
    <div class="border-t border-gray-200">
        <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Full name</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{$user->name}}</dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Email address</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{$user->email}}</dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">NIK</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{$user->nik}}</dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Status Anggota</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{$user->status_anggota}}</dd>
            </div>
            @if (Auth::user()->role === 'Pengurus')
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <button class="bg-red-100 text-red-600 px-4 py-2 rounded-full hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="remove_anggota({{ $user->id }})">
                    Non-Aktifkan Anggota
                </button>
            </div>
            @endif
        </dl>

    </div>
    @endforeach
</div>
