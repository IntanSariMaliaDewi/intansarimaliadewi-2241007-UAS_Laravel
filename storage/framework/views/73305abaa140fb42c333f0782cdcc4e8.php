

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Transaksi Penjualan</h1>
    <a href="<?php echo e(route('transaksi-penjualans.create')); ?>" class="btn btn-primary">Tambah Transaksi</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal Transaksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($transaksi->id); ?></td>
                    <td><?php echo e($transaksi->produk_id); ?></td>
                    <td><?php echo e($transaksi->jumlah); ?></td>
                    <td><?php echo e($transaksi->total_harga); ?></td>
                    <td><?php echo e($transaksi->tanggal_transaksi); ?></td>
                    <td>
                        <a href="<?php echo e(route('transaksi-penjualans.show', $transaksi->id)); ?>" class="btn btn-info">Lihat</a>
                        <a href="<?php echo e(route('transaksi-penjualans.edit', $transaksi->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('transaksi-penjualans.destroy', $transaksi->id)); ?>" method="POST" style="display:inline-block;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\resources\views/transaksi-penjualan/index.blade.php ENDPATH**/ ?>