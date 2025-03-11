

<?php $__env->startSection('title', 'App Landing Page'); ?>

<?php $__env->startSection('header'); ?>

    <?php if(auth()->guard()->guest()): ?>
        <nav>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </nav>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
        <form action="/logout" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit">Logout</button>
        </form>
    <?php endif; ?>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <h1 class="text-2xl text-center">Esto es la landing page</h1>
    <p class="text-red-600">Hola</p>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/landing.blade.php ENDPATH**/ ?>