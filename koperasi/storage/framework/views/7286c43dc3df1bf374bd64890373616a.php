<div class="container mx-auto px-4 animate__animated animate__fadeInUp">
    <div id="imageModal" class="modal-image hidden">
        <span class="close-image">&times;</span>
        <img src="" id="imageSrc" alt="Cannot Load Image">
    </div>
    <div class="bg-white shadow-md rounded p-6 animate__animated animate__zoomIn">
        <div class="flex justify-between items-center mb-4">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">Data Simpanan</h2>
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
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('id')" class="cursor-pointer"> User ID <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'id'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('name')" class="cursor-pointer"> Name <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'name'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jumlah')" class="cursor-pointer"> Jumlah <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'jumlah'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('jenis_simpanan')" class="cursor-pointer"> Jenis Simpanan <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'jenis_simpanan'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('created_at')" class="cursor-pointer"> Tanggal Transaksi <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'created_at'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="py-2 px-4 text-left"> <a wire:click.prevent="sort('status')" class="cursor-pointer"> Status <!--[if BLOCK]><![endif]--><?php if($sortColumn === 'status'): ?> <!--[if BLOCK]><![endif]--><?php if($sortDirection === 'asc'): ?> &#8593; <?php else: ?> &#8595; <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </a> </th>
                        <th class="px-4 py-2">
                            <span>Bukti Transfer</span>
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $catatanSimpananUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr wire:key='<?php echo e($user->id); ?>' class="border-b">
                        <td class="py-2 px-4"><?php echo e($user->id); ?></td>
                        <td class="py-2 px-4"><?php echo e($user->name); ?></td>
                        <td class="py-2 px-4">Rp.<?php echo e(number_format($user->jumlah,2)); ?></td>
                        <td class="py-2 px-4"><?php echo e($user->jenis_simpanan); ?></td>
                        <td class="py-2 px-4"><?php echo e($user->created_at); ?></td>
                        <td class="py-2 px-4"><?php echo e($user->status); ?></td>
                        <td class="px-6 py-4 text-sm font-medium justify-center text-center">
                            <a class="view-image text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="storage/<?php echo e($user->bukti_transfer); ?>">View</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
                            <button class="bg-green-100 text-green-600 px-4 py-2 rounded-full hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition-colors duration-200" wire:click.prevent="verify_simpanan(<?php echo e($user->id_simpanan); ?>, <?php echo e($user->id); ?>)">
                                Verifikasi
                            </button>
                            <div class="w-4"></div>
                            <button class="bg-red-100 text-red-600 px-4 py-2 rounded-full hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition-colors duration-200" wire:click.prevent="reject_simpanan(<?php echo e($user->id_simpanan); ?>, <?php echo e($user->id); ?>)">
                                Reject
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <?php echo e($catatanSimpananUsers->links()); ?>

        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var imageModal = document.getElementById('imageModal');
        var closeImage = imageModal.querySelector('.close-image');
        var imageSrc = imageModal.querySelector('#imageSrc');

        document.querySelectorAll('.view-image').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var imageUrl = this.getAttribute('href');
                imageSrc.src = imageUrl;
                imageModal.style.display = 'block';
            });
        });

        closeImage.addEventListener('click', function() {
            imageModal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == imageModal) {
                imageModal.style.display = 'none';
            }
        });
    });
</script><?php /**PATH D:\PROJECT RPL\Koperasi Main\koperasi\resources\views/livewire/simpanan/manage.blade.php ENDPATH**/ ?>