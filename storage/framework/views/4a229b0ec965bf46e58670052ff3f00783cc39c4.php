

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Confirm Deletion</h1>
        <p>Are you sure you want to delete the following book?</p>

        <table class="table table-striped">
            <tr>
                <th>Title</th>
                <td><?php echo e($book->title); ?></td>
            </tr>
            <tr>
                <th>Author</th>
                <td><?php echo e($book->author); ?></td>
            </tr>
            <tr>
                <th>Price</th>
                <td>$<?php echo e($book->price); ?></td>
            </tr>
            <tr>
                <th>Stock</th>
                <td><?php echo e($book->stock); ?></td>
            </tr>
        </table>

        <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger">Confirm Deletion</button>
        </form>

        <a href="<?php echo e(route('books.index')); ?>" class="btn btn-secondary">Cancel</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sutharsan\Desktop\project\books\book\resources\views/confirm-delete.blade.php ENDPATH**/ ?>