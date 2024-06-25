

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Kategori</h1>
    <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-primary">Tambah Kategori</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($kategori->id); ?></td>
                    <td><?php echo e($kategori->nama); ?></td>
                    <td>
                        <a href="<?php echo e(route('kategori.show', $kategori->id)); ?>" class="btn btn-info">Lihat</a>
                        <a href="<?php echo e(route('kategori.edit', $kategori->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('kategori.destroy', $kategori->id)); ?>" method="POST" class="d-inline">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\resources\views/kategori/index.blade.php ENDPATH**/ ?>