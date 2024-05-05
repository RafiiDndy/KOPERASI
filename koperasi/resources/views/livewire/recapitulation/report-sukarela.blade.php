<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp sm:px-6 lg:px-8">
  <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
    <div class="flex flex-col md:flex-row justify-between items-center mb-4">
      <div class="mb-4 md:mb-0">
        <h2 class="text-2xl font-bold text-gray-800">Report Sukarela</h2>
      </div>
      <div class="flex flex-wrap">
        <div class="mr-4 mb-2">
          <label for="monthStart" class="block text-sm font-medium text-gray-700">Month Start:</label>
          <div class="relative">
            <select wire:model.lazy="monthStart" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
              @for ($i = 1; $i <= 12; $i++) <option value="{{ $i }}">{{ date('F', strtotime("01-{$i}-2023")) }}</option>
                @endfor
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="mr-4 mb-2">
          <label for="yearStart" class="block text-sm font-medium text-gray-700">Year Start:</label>
          <div class="relative">
            <select wire:model.lazy="yearStart" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
              @for ($i = 2022; $i <= date('Y'); $i++) <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="mr-4 mb-2">
          <label for="monthEnd" class="block text-sm font-medium text-gray-700">Month End:</label>
          <div class="relative">
            <select wire:model.lazy="monthEnd" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
              @for ($i = 1; $i <= 12; $i++) <option value="{{ $i }}">{{ date('F', strtotime("01-{$i}-2023")) }}</option>
                @endfor
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="mr-4 mb-2">
          <label for="yearEnd" class="block text-sm font-medium text-gray-700">Year End:</label>
          <div class="relative">
            <select wire:model.lazy="yearEnd" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
              @for ($i = 2022; $i <= date('Y'); $i++) <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="flex items-center mb-4">
          <label for="search" class="sr-only">Search</label>
          <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <input wire:model.lazy="search" type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search" />
          </div>
        </div>
      </div>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full whitespace-nowrap table-auto">
        <thead class="bg-gray-100">
          <tr>
            <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
              <a wire:click.prevent="sort('id')" class="cursor-pointer">
                ID
                @if($sortColumn === 'id')
                @if($sortDirection === 'asc')
                &#8593;
                @else
                &#8595;
                @endif
                @endif
              </a>
            </th>
            <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
              <a wire:click.prevent="sort('name')" class="cursor-pointer">
                Name
                @if($sortColumn === 'name')
                @if($sortDirection === 'asc')
                &#8593;
                @else
                &#8595;
                @endif
                @endif
              </a>
            </th>
            <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
              <a wire:click.prevent="sort('email')" class="cursor-pointer">
                Email
                @if($sortColumn === 'email')
                @if($sortDirection === 'asc')
                &#8593;
                @else
                &#8595;
                @endif
                @endif
              </a>
            </th>
            <th class="py-3 px-6 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Total Sukarela Deposited</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach($reports as $report)
          <tr class="hover:bg-gray-100">
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">{{ $report->id }}</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">{{ $report->name }}</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">{{ $report->email }}</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">Rp.{{ number_format($report->total_sukarela, 2) }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="mt-4">
      {{ $reports->links() }}
    </div>
  </div>
</div>