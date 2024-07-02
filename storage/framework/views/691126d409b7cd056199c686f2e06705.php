

<?php $__env->startSection('content'); ?>
<?php
    use App\Models\mortuary\Mortuary;
?>

<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Corpse's List</h6>
        <a href="<?php echo e(url('mortuary/corpse_deposit')); ?>" class="ms-text-primary">Deposit New Corpse</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Admission Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Name</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Status</th>
                        <th scope="col">Days</th>
                        <th scope="col">Action</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $resultset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $corpse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td scope="row"><?php echo e($index + 1); ?></td>
                            <td><?php echo e($corpse->datex); ?></td>
                            <td><?php echo e($corpse->timex); ?></td>
                            <td><?php echo e($corpse->name_of_corpse); ?></td>
                            <td><?php echo e($corpse->sex); ?></td>
                            <td>
                                <div class="badge badge-<?php echo e($corpse->status == 'ongoing' ? 'success' : 'danger'); ?> badge-shadow p-2">
                                    <?php echo e($corpse->status); ?>

                                </div>
                            </td>
                            <td>
                                <?php if($corpse->status != "ongoing"): ?>
                                    Settled
                                <?php else: ?>
                                    <?php echo e($corpse->daysDifference); ?> days
                                <?php endif; ?>
                            </td>
                            <td>
                                <!-- <a href="<?php echo e(url('mortuary/edit_corpse_details&&details=' . $corpse->case_id)); ?>">
                                    <i class='fas fa-pencil-alt ms-text-warning'></i>
                                </a> -->

                                <a href="<?php echo e(route('mortuary.edit_corpse_details', ['case_id' => $corpse->case_id])); ?>">
                                    <i class='fas fa-pencil-alt ms-text-warning'></i>
                                </a>
                           
                                <a href="<?php echo e(route('mortuary.view_corpse_details', ['case_id' => $corpse->case_id])); ?>">
                                    <i class='fa fa-eye ms-text-primary'></i>
                                </a>

                            </td>
                            <td>
                                <?php if($corpse->status != "ongoing"): ?>
                                    <a class="btn btn-sm btn-success text-white disabled" style="margin-top: -3px;" href="#">Discharged</a>
                                <?php else: ?>
                                    <a class="btn btn-sm btn-danger text-white" style="margin-top: -3px;" href="<?php echo e(route('mortuary.discharge_corpse', ['case_id' => $corpse->case_id])); ?>" target="_blank">Discharge</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="9">No records found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mortuary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\IHEANACHO PC\imhcare\resources\views/mortuary/corpse_record.blade.php ENDPATH**/ ?>