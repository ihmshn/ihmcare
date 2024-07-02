

<?php $__env->startSection('content'); ?>
<?php
    use App\Models\mortuary\Mortuary;
?>

<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Discharge Corpse's Information</h6>
        <a href="#" onclick="window.close();" class="ms-text-primary"><i class="fas fa-times" style="font-size: larger;"></i> Close </a>
        <!-- <a href="?action=corpse_deposit" class="ms-text-primary">Deposit New Corpse</a> -->
    </div>
    <div class="ms-panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Corpse ID: <b class="text-dark"><?php echo e($corpse->case_id); ?></b></h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <label>Date</label>
                                    <input readonly type="text" class="form-control" name="datex" value="<?php echo e($corpse->datex); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Deposit Time</label>
                                    <input readonly type="text" class="form-control" name="timex" value="<?php echo e($corpse->timex); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Name</label>
                                    <input readonly type="text" class="form-control" name="name" value="<?php echo e($corpse->name_of_corpse); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Sex</label>
                                    <input readonly type="text" class="form-control" name="sex" value="<?php echo e($corpse->sex); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>From</label>
                                    <input readonly type="text" class="form-control" name="village" value="<?php echo e($corpse->name_of_village); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Religion</label>
                                    <input readonly type="text" class="form-control" name="religion" value="<?php echo e($corpse->religion); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Date Of Death</label>
                                    <input readonly type="text" class="form-control" name="DateOfDeath" value="<?php echo e($corpse->dateofdeath); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Cause Of Death</label>
                                    <input readonly type="text" class="form-control" name="CauseOfDeath" value="<?php echo e($corpse->causeofdeath); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Place Of Death</label>
                                    <input readonly type="text" class="form-control" name="PlaceOfDeath" value="<?php echo e($corpse->placeofdeath); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Complexion</label>
                                    <input readonly type="text" class="form-control" name="complexion" value="<?php echo e($corpse->complexion); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Depositor Name</label>
                                    <input readonly type="text" class="form-control" name="depositor_name" value="<?php echo e($corpse->depositor_name); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Relationship</label>
                                    <input readonly type="text" class="form-control" name="relationship" value="<?php echo e($corpse->relationship); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Address</label>
                                    <input readonly type="text" class="form-control" name="address" value="<?php echo e($corpse->address); ?>">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label>Phone</label>
                                    <input readonly type="text" class="form-control" name="phone" value="<?php echo e($corpse->phone); ?>">
                                </div>

                                <div class="col-sm-3 mb-3">
                                    <label>Tally Number</label>
                                    <input readonly type="text" class="form-control" name="tally_number" value="<?php echo e($corpse->tally_number); ?>">
                                </div>

                                <div class="col-sm-3 mb-3">
                                    <label>Storage Type</label>
                                    <input readonly type="text" class="form-control" name="storage_type" value="<?php echo e($corpse->storage_type); ?>">
                                </div>

                                <div class="col-sm-3 mb-3">
                                    <label>Color</label>
                                    <input readonly type="text" class="form-control" name="color" value="<?php echo e($corpse->color); ?>">
                                </div>

                                <div class="col-sm-3 mb-3">
                                    <label>Status</label>
                                    <input readonly type="text" class="form-control" name="status" value="<?php echo e($corpse->status); ?>">
                                </div>

                                <div class="col-sm-12 mb-3">
                                    <label>Additional Notes</label>
                                    <textarea readonly class="form-control" name="additional_notes"><?php echo e($corpse->additionalnotes); ?></textarea>
                                </div>

                                <div class="col-sm-3 mb-3">
                                    <label>Total Bill</label>
                                    <input style="background-color:#E2F1FF; color:#5B88CA;" class="form-control border-0" readonly name="total_amount" value="<?php echo e(number_format($bill->total_amount)); ?>">
                                </div>

                                <div class="col-sm-3 mb-3">
                                    <label>Amount Paid</label>
                                    <input style="background-color:#E2FFEF; color:#2BC06E;" class="form-control border-0" readonly name="amount_paid" value="<?php echo e(number_format($bill->amount_paid)); ?>">
                                </div>

                                <div class="col-sm-3 mb-3">
                                    <label>Balance</label>
                                    <input style="background-color:#FEEBEA; color:#F1473F;" class="form-control border-0" readonly name="balance" value="<?php echo e(number_format($balance)); ?>">
                                </div>

                                <div class="col-sm-3 mb-3">
                                    <label>Status</label>
                                    <input style="background-color:#FEF6E3; color:#FDA600;" type="text" class="form-control border-0" readonly name="payment_status" value="<?php echo e($bill->payment_status); ?>">
                                </div>

                                <div class="col-sm-12 mb-3">
                                    <input type="hidden" name="case_id" value="<?php echo e($corpse->case_id); ?>">
                                    <input type="hidden" name="balance" value="<?php echo e($balance); ?>">
                                    <button class="btn btn-danger mt-4 d-block w-100" name="discharge_corpse" type="submit"><i class="fa fa-check-circle"></i> Discharge</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mortuary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\IHEANACHO PC\imhcare\resources\views/mortuary/discharge_corpse.blade.php ENDPATH**/ ?>