<div class="container mx-auto px-4 py-8 animate__animated animate__fadeInUp">
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Data Anggota</h2>
            </div>
            <div class="flex">
                <div class="relative"> 
                    <input wire:model.lazy="search" type="text" class="bg-gray-200 border-0 py-2 px-4 pr-16 rounded-lg text-sm focus:outline-none focus:ring-0 focus:ring-offset-0 focus:bg-white" placeholder="Search...">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('name')" class="cursor-pointer"> Name <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'name'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('email')" class="cursor-pointer"> Email <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'email'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('nik')" class="cursor-pointer"> NIK <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'nik'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('no_hp')" class="cursor-pointer"> No Handphone <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'no_hp'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('umur')" class="cursor-pointer"> Umur <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'umur'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('status_anggota')" class="cursor-pointer"> Status Anggota <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'status_anggota'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody> 
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr class="border-b <?php switch($user->status_anggota): case ('Aktif'): ?> verified-row <?php break; ?> <?php case ('Tidak Aktif'): ?> pending-row <?php break; ?> <?php case ('Rejected'): ?> rejected-row <?php default: ?> <?php endswitch; ?>">
                        <td class="py-2 px-4"><?php echo e($user->name); ?></td>
                        <td class="py-2 px-4"><?php echo e($user->email); ?></td>
                        <td class="py-2 px-4"><?php echo e($user->nik); ?></td>
                        <td class="py-2 px-4"><?php echo e($user->no_hp); ?></td>
                        <td class="py-2 px-4"><?php echo e($user->umur); ?> Tahun</td>
                        <td class="py-2 px-4"><?php echo e($user->status_anggota); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
                            <a dusk="detail" href="<?php echo e(route('Anggota.detail', $user->id)); ?>" class="rounded-full border border-blue-500 bg-blue-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-blue-700 hover:bg-blue-700 focus:ring focus:ring-blue-200 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300">
                                View
                            </a>
                        </td>
                    </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]--> 
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <?php echo e($users->links()); ?>

        </div>
    </div>
</div><?php /**PATH D:\PROJECT RPL\Koperasi Main\koperasi\resources\views/livewire/anggota/show.blade.php ENDPATH**/ ?>