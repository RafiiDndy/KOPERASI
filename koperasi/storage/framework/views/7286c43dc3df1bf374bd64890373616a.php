<div class="container mx-auto mt-8">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Simpanan</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Transaksi</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-4">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $simpananUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="transition-all hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->id); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->name); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->jumlah); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->jenis_simpanan); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->created_at); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->status); ?></td>
                    
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
                        <button class="bg-green-100 text-green-600 px-4 py-2 rounded-full hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="verify_simpanan(<?php echo e($user->id_simpanan); ?>, <?php echo e($user->id); ?>)">
                            Verifikasi
                        </button>
                        <div class="w-4"></div>
                        <button class="bg-red-100 text-red-600 px-4 py-2 rounded-full hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="reject_simpanan(<?php echo e($user->id_simpanan); ?>, <?php echo e($user->id); ?>)">
                            Reject
                        </button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH D:\PROJECT RPL\Koperasi Main\koperasi\resources\views/livewire/simpanan/manage.blade.php ENDPATH**/ ?>