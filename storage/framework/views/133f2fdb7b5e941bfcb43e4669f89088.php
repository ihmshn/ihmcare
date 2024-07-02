

<?php $__env->startSection('content'); ?>
<?php
    use App\Models\mortuary\Mortuary;
?>

<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Corpse's Information</h6>
        <a href="/mortuary/corpse_record" class="ms-text-primary">
            <i class="fas fa-arrow-circle-left float-left" style="font-size: larger;"> </i>
        </a>
    </div>
    <div class="ms-panel-body">
        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>
        <?php if($corpse): ?>
        <div class="row">   
            <div class="col-lg-12"> 
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Corpse ID: <b class="text-dark"><?php echo e($corpse->case_id); ?></b></h6>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <span>Date</span>
                                    <input readonly type="text" class="form-control" name="datex" value="<?php echo e($corpse->datex); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Deposit Time</span>
                                    <input readonly type="text" class="form-control" name="LevelName" value="<?php echo e($corpse->timex); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Name</span>
                                    <input readonly type="text" class="form-control" name="name" value="<?php echo e($corpse->name_of_corpse); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Sex</span>
                                    <input readonly type="text" class="form-control" name="sex" value="<?php echo e($corpse->sex); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>From</span>
                                    <input readonly type="text" class="form-control" name="village" value="<?php echo e($corpse->name_of_village); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Religion</span>
                                    <input readonly type="text" class="form-control" name="religion" value="<?php echo e($corpse->religion); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Date Of Death</span>
                                    <input readonly type="text" class="form-control" name="DateOfDeath" value="<?php echo e($corpse->dateofdeath); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Cause Of Death</span>
                                    <input readonly type="text" class="form-control" name="CauseOfDeath" value="<?php echo e($corpse->causeofdeath); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Place Of Death</span>
                                    <input readonly type="text" class="form-control" name="PlaceOfDeath" value="<?php echo e($corpse->placeofdeath); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Complexion</span>
                                    <input readonly type="text" class="form-control" name="complexion" value="<?php echo e($corpse->complexion); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Depositor Name</span>
                                    <input readonly type="text" class="form-control" name="depositor_name" value="<?php echo e($corpse->depositor_name); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Relationship</span>
                                    <input readonly type="text" class="form-control" name="relationship" value="<?php echo e($corpse->relationship); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Address</span>
                                    <input readonly type="text" class="form-control" name="depositor_name" value="<?php echo e($corpse->address); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Phone</span>
                                    <input readonly type="text" class="form-control" name="phone" value="<?php echo e($corpse->phone); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Deposit Amount</span>
                                    <input readonly type="text" class="form-control" name="deposit_amount" value="<?php echo e($corpse->deposit_amount); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Tally Number</span>
                                    <input readonly type="text" class="form-control" name="tally_number" value="<?php echo e($corpse->tally_number); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Color</span>
                                    <input readonly type="text" class="form-control" name="color" value="<?php echo e($corpse->color); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Mortician Name</span>
                                    <input readonly type="text" class="form-control" name="mortician_name" value="<?php echo e($corpse->mortician_name); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Cashier </span>
                                    <input readonly type="text" class="form-control" name="cashier_signature" value="<?php echo e($corpse->cashier_signature); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Registered By </span>
                                    <?php if($staff): ?>
                                        <input readonly type="text" class="form-control" name="entered_by" value="<?php echo e($staff->first_name); ?> <?php echo e($staff->last_name); ?>">
                                    <?php else: ?>
                                        <input readonly type="text" class="form-control" name="entered_by" value="N/A">
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Status </span>
                                    <input readonly type="text" class="form-control" name="status" value="<?php echo e($corpse->status); ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Additional Notes </span>
                                    <textarea readonly class="form-control" name="status"><?php echo e($corpse->additionalnotes); ?></textarea>
                                </div>
                                <div class="col-lg-12"><br />
                                    <?php if(empty($corpse->contract_form_image)): ?>
                                        <a class="btn btn-primary form-control btn-block text-white">
                                            <i class="fa fa-warning fa-fw">  </i> Contract Form Not Uploaded Yet
                                        </a>
                                    <?php else: ?>
                                        <a class="btn btn-primary form-control btn-block" href="<?php echo e(asset('caseDocument/'.$corpse->contract_form_image)); ?>" target="_blank">
                                            <i class="fa fa-eye fa-fw">  </i> View Contract Form
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
            <div class="alert alert-danger">Corpse details not found.</div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mortuary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\IHEANACHO PC\imhcare\resources\views/mortuary/view_corpse_details.blade.php ENDPATH**/ ?>