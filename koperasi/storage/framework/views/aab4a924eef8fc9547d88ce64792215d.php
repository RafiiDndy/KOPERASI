<div class="container mx-auto mt-8">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No Handphone</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Umur</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Anggota</th>
                    <th scope="col" class="px-6 py-4">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="transition-all hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->name); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->email); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->nik); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->no_hp); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->umur); ?> Tahun</td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->status_anggota); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
                    <a href="<?php echo e(route('Anggota.detail', $user->id)); ?>" class="rounded-full border border-blue-500 bg-blue-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-blue-700 hover:bg-blue-700 focus:ring focus:ring-blue-200 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300">
                        View
                    </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH D:\PROJECT RPL\Koperasi Main\koperasi\resources\views/livewire/anggota/show.blade.php ENDPATH**/ ?>