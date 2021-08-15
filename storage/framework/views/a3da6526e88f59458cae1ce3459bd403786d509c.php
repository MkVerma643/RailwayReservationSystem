<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Passenger Details</div>
                <div class="text-right"><a class="navbar-brand" href="<?php echo e(url('/')); ?>">Home</a></div>

                <?php
                $userId = Auth::id();
                $bookings= DB::table(  'booking')->select('passenger_id','train_id','depart_date','class','answer')
                    ->where('passenger_id','=',$userId)->get();
                ?>

                <div class="card-body">
                    <h2>Passenger Bookings</h2>
                    <table border="1px" cellspacing="3px" cellpadding="7px">
                        <tr>
                            <td><strong>Passenger_id</strong></td>
                            <td><strong>Train_id</strong></td>
                            <td><strong>Depart_date</strong></td>
                            <td><strong>Class</strong></td>
                            <td><strong>Name | Age | Mobile | Child</strong></td>
                        </tr>
                        <tr>
                            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td><strong><?php echo e($b->passenger_id); ?></strong></td>
                                <td><strong><?php echo e($b->train_id); ?></strong></td>
                                <td><strong><?php echo e($b->depart_date); ?></strong></td>
                                <td><strong><?php echo e($b->class); ?></strong></td>
                                <td><strong><?php echo e($b->answer); ?></strong></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RailwayReservationSystem\resources\views/home.blade.php ENDPATH**/ ?>