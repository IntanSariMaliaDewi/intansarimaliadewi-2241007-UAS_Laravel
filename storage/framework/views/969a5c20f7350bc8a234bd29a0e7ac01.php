

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Supplier</h1>
    <a href="<?php echo e(route('supplier.create')); ?>" class="btn btn-primary">Tambah Supplier</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($supplier->id); ?></td>
                    <td><?php echo e($supplier->nama); ?></td>
                    <td><?php echo e($supplier->alamat); ?></td>
                    <td><?php echo e($supplier->telepon); ?></td>
                    <td><?php echo e($supplier->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('supplier.show', $supplier->id)); ?>" class="btn btn-info">Lihat</a>
                        <a href="<?php echo e(route('supplier.edit', $supplier->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('supplier.destroy', $supplier->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\resources\views/supplier/index.blade.php ENDPATH**/ ?>