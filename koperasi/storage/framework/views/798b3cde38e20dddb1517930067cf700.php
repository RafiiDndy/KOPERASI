<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="text-center mb-12 text-4xl font-bold">
        <div class="text-gray-500">Welcome,</div>
        <?php echo e(Auth::user()->name); ?>

    </div>
    <div class="px-8 pb-12 mx-auto md:px-12 lg:px-32 max-w-7xl animate__animated animate__fadeInD">
        <div class="grid grid-cols-2 text-sm font-medium text-gray-500 gap-x-2 gap-y-12 lg:grid-cols-3 lg:gap-y-16 text-balance ">
            <div>
                <div class="notification-card-dashboard">
                    <div class="notiglow-card-dashboard"></div>
                    <div class="notiborderglow-card-dashboard"></div>
                    <div class="notititle-card-dashboard">Total Anggota</div>
                    <?php if(Auth::user()->role == 'Pengurus'): ?>
                    <div class="notibody-card-dashboard"><?php echo e(@App\Models\User::query()->where('status_anggota','Aktif')->count()); ?> Anggota Aktif</div>
                    <div class="notibody-card-dashboard"><?php echo e(@App\Models\User::query()->where('status_anggota','Tidak Aktif')->count()); ?> Anggota Tidak Aktif</div>
                    <?php else: ?>
                    <div class="notibody-card-dashboard mt-3"><?php echo e(@App\Models\User::query()->where('status_anggota','Aktif')->count()); ?> Anggota Aktif</div>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <div class="notification-card-dashboard">
                    <div class="notiglow-card-dashboard"></div>
                    <div class="notiborderglow-card-dashboard"></div>
                    <div class="notititle-card-dashboard">Total Simpanan</div>
                    <div class="notibody-card-dashboard mt-3">Rp.<?php echo e(number_format(@App\Models\CatatanSimpanan::query()->where('status','Verified')->sum('jumlah'))); ?></div>
                </div>
            </div>
            <div>
                <div class="notification-card-dashboard">
                    <div class="notiglow-card-dashboard"></div>
                    <div class="notiborderglow-card-dashboard"></div>
                    <div class="notititle-card-dashboard">Status Anggota</div>
                    <div class="notibody-card-dashboard mt-3"><?php echo e(@App\Models\User::query()->where('id',Auth::user()->id)->first(['status_anggota'])->status_anggota); ?></div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\PROJECT RPL\Koperasi Main\koperasi\resources\views/dashboard.blade.php ENDPATH**/ ?>