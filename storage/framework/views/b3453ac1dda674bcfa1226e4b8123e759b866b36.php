<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk Thrift</title>
</head>
<body>
    <h1>Produk Thrift Kami</h1>
    <div style="display: flex; flex-wrap: wrap;">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="border: 1px solid #ccc; margin: 10px; padding: 10px; width: 200px;">
                <?php if($product->image): ?>
                    <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" style="width: 100%;">
                <?php endif; ?>
                <h2><?php echo e($product->name); ?></h2>
                <p>Harga: Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
                <p>Stok: <?php echo e($product->stock); ?></p>
                <p>Kategori: <?php echo e($product->category->name ?? '-'); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
</html>
<?php /**PATH D:\KULIAH\SEMESTER 6\MPTI\ThriftWave\resources\views/index.blade.php ENDPATH**/ ?>