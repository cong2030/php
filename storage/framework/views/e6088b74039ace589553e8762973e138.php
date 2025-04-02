
<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Thêm Tin</h2>
    <form action="/tin/them" method="post">
        <?php echo csrf_field(); ?>
        <p>Tiêu đề: <input name="tieuDe" class="form-control"></p>
        <p>Tóm tắt: <textarea name="tomTat" class="form-control"></textarea></p>
        <p>Hình ảnh: <input name="urlHinh" class="form-control"></p>
        <p>Loại tin: 
            <select name="idLT" class="form-control">
                <option value="1">Xã hội</option>
                <option value="3">Du lịch</option>
            </select>
        </p>
        <p><button type="submit" class="btn btn-primary">Thêm tin</button></p>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\lab5\resources\views\Tin\them.blade.php ENDPATH**/ ?>