
<div class="flex h-screen overflow-hidden bg-side-nav">
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-60">
        <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-side-nav">
            <div class="flex flex-col flex-grow px-4">
            <div class="hidden md:block">
                <div class="p-4 flex justify-center">
                    <a href="<?php echo e(route('profile.show')); ?>">
                        <img src="<?php echo e(Auth::user()->profile_photo_url); ?>" alt="<?php echo e(Auth::user()->name); ?>" class="rounded-full mx-auto object-cover" style="width: 100px; height: 100px;" />
                    </a>
                </div>
                <hr class="border-white my-2 mt-4">
            </div>
            <nav class="flex-1 space-y-1 bg-side-nav ">
                <p class="px-4 pt-4 text-xs font-semibold text-white-400 uppercase">
                Menu
                </p>
                <ul>
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" :active="request()->routeIs('dashboard')" class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-white-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500">
                    <ion-icon class="size-4 md hydrated" name="home-outline" role="img" aria-label="aperture outline"></ion-icon>
                    <span class="ml-4"> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('Simpanan.index')); ?>" :active="request()->routeIs('Simpanan.index')" class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-white-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500" >
                    <ion-icon class="size-4 md hydrated" name="wallet-outline" role="img" aria-label="trending up outline"></ion-icon>
                    <span class="ml-4"> Simpanan </span>
                    </a>
                </li>
                <?php if(Auth::user()->role === 'Pengurus'): ?>
                </ul>
                <p class="px-4 pt-4 text-xs font-semibold text-white-400 uppercase">
                Admin
                </p>
                <ul>
                <li>
                    <div x-data="{ open: false }">
                    <button class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-white-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group" @click="open = ! open">
                        <span class="inline-flex items-center text-base font-light">
                        <ion-icon class="size-4 md hydrated" name="pie-chart-outline" role="img" aria-label="pie chart outline"></ion-icon>
                        <span class="ml-4"> Manage </span>
                        </span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline size-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
                        <ul>
                        <li>
                            <a href="<?php echo e(route('Anggota.index')); ?> " :active="request()->routeIs('Anggota.index')" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-light text-white-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                                <ion-icon class="size-4 md hydrated" name="people-outline" role="img" aria-label="flower outline"></ion-icon>
                                <span class="ml-4"> Anggota </span>
                                <span class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                <?php echo e(@App\Models\User::query()->where('status_anggota','Not_verified')->count()); ?>

                                </span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('Simpanan.manage')); ?>" :active="request()->routeIs('Simpanan.manage')" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-light text-white-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                                <ion-icon class="size-4 md hydrated" name="albums-outline" role="img" aria-label="notifications outline"></ion-icon>
                                <span class="ml-4"> Simpanan </span>
                                <span class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                <?php echo e(@App\Models\CatatanSimpanan::query()->where('status','menunggu verifikasi')->count()); ?>

                                </span>
                            </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </li>
                <li>
                    <a href="<?php echo e(route('Recapitulation.index')); ?>" :active="request()->routeIs('Recapitulation.index')" class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-white-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500">
                    <ion-icon class="size-4 md hydrated" name="receipt-outline" role="img" aria-label="aperture outline"></ion-icon>
                    <span class="ml-4"> Recapitulation </span>
                    </a>
                </li>
                <?php endif; ?>
                </ul>
            </nav>
            <hr class="border-white my-2 mt-4">
            </div>
            <div class="flex flex-shrink-0 p-4 px-4 bg-side-nav">
            <div @click.away="open = false" class="relative inline-flex items-center w-full " x-data="{ open: false }">
                <button @click="open = !open" class="inline-flex items-center justify-between w-full px-4 py-3 text-lg font-medium text-center text-white transition duration-500 ease-in-out transform rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <span>
                    <span class="flex-shrink-0 block group">
                    <div class="flex items-center ">
                        <div>
                        <img class="inline-block object-cover rounded-full h-9 w-9" src="<?php echo e(Auth::user()->profile_photo_url); ?>" alt="<?php echo e(Auth::user()->name); ?>">
                        </div>
                        <div class="ml-3 text-left">
                        <p class="text-sm font-medium text-gray-500 group-hover:text-blue-500">
                        <?php echo e(Auth::user()->name); ?>

                        </p>
                        <p class="text-xs font-medium text-gray-500 group-hover:text-blue-500">
                        <?php echo e(Auth::user()->role); ?>

                        </p>
                        </div>
                    </div>
                    </span>
                </span>
                <svg :class="{'rotate-180': open, 'rotate-0': !open}" xmlns="http://www.w3.org/2000/svg" class="inline size-5 ml-4 text-gray-900 transition-transform duration-200 transform rotate-0" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute bottom-0 z-50 w-full mx-auto mt-2 origin-bottom-right bg-white rounded-xl" style="display: none">
                <div class="px-2 py-2 bg-gray rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                    <ul>
                    <li>
                        <a href="<?php echo e(route('profile.show')); ?>" class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500" href="#_">
                        <ion-icon class="size-4 md hydrated" name="person-circle-outline" role="img" aria-label="person circle outline"></ion-icon>
                        <span class="ml-4"> Profile </span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                            <?php echo csrf_field(); ?>
                            <button class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500">
                                <ion-icon class="size-4 md hydrated" name="log-out-outline" role="img" aria-label="person circle outline"></ion-icon>
                                <span class="ml-4"> Logout </span>
                            </button>
                        </form>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
            <?php /**PATH D:\PROJECT RPL\Koperasi Main\koperasi\resources\views/navigation-menu.blade.php ENDPATH**/ ?>