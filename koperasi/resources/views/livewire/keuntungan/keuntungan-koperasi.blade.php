<div class="px-8 pb-12 mx-auto md:px-12 lg:px-32 max-w-7xl animate__animated animate__fadeInD">
  <div class="notification-card-dashboard">
    <div class="notiglow-card-dashboard"></div>
    <div class="notiborderglow-card-dashboard"></div>
    <div class="notititle-card-dashboard flex justify-between items-center">
      <span>Keuntungan</span>
      <div class="mr-4">
        <div class="relative">
          <select wire:model.lazy="year" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            @for ($i = 2022; $i <= date('Y'); $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
          </select>
          <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="notibody-card-dashboard">Rp. {{ number_format($totalharga,2) }}</div>
  </div>
</div>