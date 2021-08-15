<?php $__env->startSection('content'); ?>
    <div class="container">
            <div >
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>
                    <br>
                    <table border="1px" cellspacing="3px" cellpadding="7px">
                        <tr>
                            <td><strong>Train</strong></td>
                            <td> <a href="<?php echo e(url('create')); ?>"><strong>Create</strong></a></td>
                        <tr>
                            <td><strong>Train_Number</strong></td>
                            <td><strong>Train_Name</strong></td>
                            <td><strong>Total_Ticket</strong></td>
                            <td colspan="2"><strong>Actions</strong></td>
                        </tr>
                    <?php $__currentLoopData = $train; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $train): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($train->tnumber); ?></td>
                                    <td><?php echo e($train->trainname); ?></td>
                                <td><?php echo e($train->totalticket); ?></td>
                            <td><a href="<?php echo e(route('train.edit',[$train->id])); ?>">Update</a></td>
                            <td><a href="<?php echo e(route('train.destroy',$train->id)); ?>">Delete</a></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                            <tr><td colspan="5">****************************************************************************</td></tr>
                        <tr>
                            <td><strong>News</strong></td>
                            <td><a href="<?php echo e(url('createnews')); ?>"><strong>Add</strong></a></td>
                            <tr>
                                <td><strong>News Title</strong></td>
                                <td><strong>Description</strong></td>
                                <td colspan="2"><strong>Actions</strong></td>
                            </tr>
                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                            <td><?php echo e($news->title); ?></td>
                            <td><?php echo e($news->description); ?></td>
                            <td><a href="<?php echo e(route('news.edit',[$news->id])); ?>">Update</a></td>
                            <td><a href="<?php echo e(route('news.destroy',$news->id)); ?>">Delete</a></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                            <tr><td colspan="5">****************************************************************************</td></tr>
                            <tr>
                                <td><strong>Questions</strong></td>
                                <td><a href="<?php echo e(url('createquestion')); ?>"><strong>Add</strong></a></td>
                            </tr>
                                <tr>
                                <td><strong>Questions</strong></td>
                                <td colspan="3"><strong>Actions</strong></td>
                            </tr>
                                <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <td colspan="2"><?php echo e($questions->question); ?></td>
                            <td><a href="<?php echo e(route('question.edit',[$questions->id])); ?>">Update</a></td>
                            <td><a href="<?php echo e(route('question.destroy',$questions->id)); ?>">Delete</a></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <tr>
                            <tr><td colspan="5">****************************************************************************</td></tr>
                            <tr>
                                <td><strong>All Bookings</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Train ID</strong></td>
                                <td><strong>Depart_date</strong></td>
                                <td><strong>Passenger ID</strong></td>
                                <td><strong>Class</strong></td>
                                <td colspan="2"><strong>Actions</strong></td>
                            </tr>
                                <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <td><?php echo e($booking->train_id); ?></td>
                            <td><?php echo e($booking->depart_date); ?></td>
                            <td><?php echo e($booking->passenger_id); ?></td>
                            <td><?php echo e($booking->class); ?></td>
                            <td><a Href="<?php echo e(route('answer',['id'=>$booking->id])); ?>">View Answers</a></td>
                            <td><a href="<?php echo e(route('booking.destroy',$booking->id)); ?>">Delete</a></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                    </table>
                    <br>

                </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RailwayReservationSystem\resources\views/dashboard.blade.php ENDPATH**/ ?>