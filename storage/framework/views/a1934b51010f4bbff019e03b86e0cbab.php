<?php $__env->startSection('content'); ?>
<?php
    use App\Models\mortuary\Mortuary;
?>

<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Mortuary Bill</h6>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Case ID</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td scope="row"><?php echo e($index + 1); ?></td>
                        <td><?php echo e($bill->corpse_id); ?></td>
                        <td><?php echo e(number_format($bill->amount_paid)); ?></td>
                        <td><?php echo e(number_format($bill->total_amount)); ?></td>
                        <td>
                            <?php if($bill->payment_status == 'Paid'): ?>
                            <span class="badge badge-success p-2"><?php echo e($bill->payment_status); ?></span>
                            <?php else: ?>
                            <span class="badge badge-warning p-2"><?php echo e($bill->payment_status); ?></span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('mortuary.bill_details', ['bill_id' => $bill->bill_id])); ?>" target="_blank" class="btn btn-primary" style="margin-top:-3px;">
                                <i class='fa fa-eye ms-text-white'></i> View
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mortuary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\IHEANACHO PC\imhcare\resources\views/mortuary/mortuary_bill.blade.php ENDPATH**/ ?>