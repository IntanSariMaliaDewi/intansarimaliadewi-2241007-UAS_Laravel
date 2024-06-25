

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="<?php echo e(route('produk.create')); ?>" class="btn btn-primary">Tambah Produk</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Supplier</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($produk->id); ?></td>
                    <td><?php echo e($produk->nama); ?></td>
                    <td><?php echo e($produk->deskripsi); ?></td>
                    <td><?php echo e($produk->harga); ?></td>
                    <td><?php echo e($produk->stok); ?></td>
                    <td><?php echo e($produk->kategori->nama); ?></td>
                    <td><?php echo e($produk->supplier->nama); ?></td>
                    <td>
                        <a href="<?php echo e(route('produk.show', $produk->id)); ?>" class="btn btn-info">Lihat</a>
                        <a href="<?php echo e(route('produk.edit', $produk->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('produk.destroy', $produk->id)); ?>" method="POST" class="d-inline">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\resources\views/produk/index.blade.php ENDPATH**/ ?>