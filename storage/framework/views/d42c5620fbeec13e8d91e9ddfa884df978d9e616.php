

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Book</h1>
        <form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($book->title); ?>" required>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="<?php echo e($book->author); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo e($book->price); ?>" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="<?php echo e($book->stock); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Book</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sutharsan\Desktop\project\books\book\resources\views/edit.blade.php ENDPATH**/ ?>