<aside>
  <div class="flex justify-start h-full w-full bg-side-nav flex-col">
    <div class="p-4 flex justify-center">
      <a href="{{ route('profile.show') }}">
        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full mx-auto object-cover" style="width: 100px; height: 100px;" />
      </a>
    </div>
    <div class="text-white text-center">{{ Auth::user()->name }}</div>
    <hr class="border-gray-100 my-2 mt-4">
    <nav class="mt-2">
      <div class="px-16 py-2 text-white font-semibold tracking-wider uppercase text-center">Menu</div>
        <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="menu-item px-4 py-2 flex items-center text-gray-200 hover:bg-blue-800">
          <svg class="w-5 h-5 mr-2 menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg>
          <span>Dashboard</span>
        </a>
        @if(Auth::user()->role === 'Pengurus')
        <a href="{{ route('Anggota.index') }} " :active="request()->routeIs('Anggota.index')" class="menu-item px-4 py-2 flex items-center text-gray-200 hover:bg-blue-800">
          <svg class="w-5 h-5 mr-2 menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
            <line x1="12" y1="22.08" x2="12" y2="12"></line>
          </svg>
          <span>Manage Anggota</span>
        </a>
        <a href="{{ route('Simpanan.manage') }}" :active="request()->routeIs('Simpanan.manage')" class="menu-item px-4 py-2 flex items-center text-gray-200 hover:bg-blue-800">
          <svg class="w-5 h-5 mr-2 menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
          <span>Manage Simpanan</span>
        </a>
        @endif
        <a href="{{ route('Simpanan.index') }}" :active="request()->routeIs('Simpanan.index')" class="menu-item px-4 py-2 flex items-center text-gray-200 hover:bg-blue-800">
          <svg class="w-5 h-5 mr-2 menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
            <line x1="12" y1="11" x2="12" y2="17"></line>
            <line x1="9" y1="14" x2="15" y2="14"></line>
          </svg>
          <span>Simpanan</span>
        </a>
      </div>
    </nav>
</aside>
