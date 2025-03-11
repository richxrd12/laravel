

<?php $__env->startSection('title', 'Add blog'); ?>

<?php $__env->startSection('header'); ?>

    <a href="/home" class="btn btn-primary">Home</a>

    <form action="/logout" method="POST">
        <button type="submit">Logout</button>
    </form>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>

    <form action="/blog/add" method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    
        <label for="text">Text</label>
        <input type="textarea" name="text" id="text">
        
        <button type="submit">Add</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/add.blade.php ENDPATH**/ ?>