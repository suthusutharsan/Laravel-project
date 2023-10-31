

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <h1>List of Books</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->title); ?></td>
                <td><?php echo e($book->author); ?></td>
                <td>$<?php echo e($book->price); ?></td>
                <td>
                    <?php if($book->stock == 0): ?>
                    out of stock
                    <?php else: ?>
                    <?php echo e($book->stock); ?>

                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('books.delete', $book->id)); ?>" method="POST" style="display: inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <form action="<?php echo e(route('books.issue', $book->id)); ?>" method="POST" style="display: inline;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-primary btn-sm">Issue</button>
                    </form>
                    <form action="<?php echo e(route('books.return', $book->id)); ?>" method="POST" style="display: inline;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-success btn-sm">Return</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary">Add Book</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sutharsan\Desktop\project\books\book\resources\views/index.blade.php ENDPATH**/ ?>