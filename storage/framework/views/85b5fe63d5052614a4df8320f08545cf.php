

<?php $__env->startSection('content'); ?>
<?php
    use App\Models\mortuary\Mortuary;
?>
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Mortuary Price List</h6>
        <a href="/mortuary/add_mortuary_price_list" class="ms-text-primary">Add New Price List</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Price Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Free Days</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no_id = 1;
                        $resultset = DB::table('price_list')->orderBy('id')->get();
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $resultset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td scope="row"><?php echo e($no_id++); ?></td>
                            <td><?php echo e($price->price_name); ?></td>
                            <td><?php echo e($price->amount); ?></td>
                            <td><?php echo e($price->description); ?></td>
                            <td>
                                <?php if($price->freeday == "No"): ?>
                                    <?php echo e(""); ?>

                                <?php else: ?>
                                    <?php echo e($price->freeday); ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                
                                <a href="<?php echo e(route('mortuary.edit_price_list', ['id' => $price->id])); ?>">
                                    <i class='fas fa-pencil-alt ms-text-warning'></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6">No data found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mortuary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\IHEANACHO PC\imhcare\resources\views/mortuary/mortuary_price_list.blade.php ENDPATH**/ ?>