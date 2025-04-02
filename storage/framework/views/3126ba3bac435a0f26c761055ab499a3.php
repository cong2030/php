
<?php $__env->startSection('content'); ?>
<table class="table">
    <tr><th>ID</th><th>Tiêu đề</th><th>Tóm tắt</th><th>Hình ảnh</th><th>Hành động</th></tr>
    <?php $__currentLoopData = $tinList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($tin->id); ?></td>
            <td><?php echo e($tin->tieuDe); ?></td>
            <td><?php echo e($tin->tomTat); ?></td>
            <td><img src="<?php echo e($tin->urlHinh); ?>" width="100"></td>
            <td>
                <a href="/tin/sua/<?php echo e($tin->id); ?>">Sửa</a> |
                <a href="/tin/xoa/<?php echo e($tin->id); ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\lab5\resources\views\Tin\danhsach.blade.php ENDPATH**/ ?>