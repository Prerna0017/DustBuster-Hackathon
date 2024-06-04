
<?php $__env->startSection('title','Vaccum Cleaning List'); ?>
<?php $__env->startSection('content'); ?> 

<section class="home-section" style="background-color:#F2F6F8;">
<div class="inputfield">
    <br>
        <br>
        <br>
        <br>
        <a href="">
            <input type="submit" value="VACCUM CLEANING LIST" class="btn">
        </a>
    </div> 
    <div style="text-align: center;">
        <?php echo e(session('msg')); ?>

    </div>
    <?php $number=1; ?> 
    <div >
        <table style="width:100%;" class="content-table" id=myTable>
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Bus Registration Plate Number</th>
                    <th>Cleaned Date</th>
                    <th>Next Due date</th>
                </tr> 
            </thead>
            <?php $__currentLoopData = $vaccumArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="text-align:center;"><?php echo e($number++); ?></td>
                <td style="text-align:center;"><?php echo e($bus->bus_reg_plate); ?></td>
                <td style="text-align:center;"><?php echo e($bus->cleaned_date); ?></td>
                <td style="text-align:center;"><?php echo e($bus->next_due_date); ?></td>                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.supervisor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DustBuster\resources\views/vaccum_cleaning.blade.php ENDPATH**/ ?>