<?php $__env->startSection('content'); ?>
    <div class="container">
            <h1><?php echo e($post->title); ?></h1>
            <p><?php echo e($post->description); ?></p><br>
            <b>Autor:<?php echo e($post->user->name); ?></b>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>