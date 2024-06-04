
<?php $__env->startSection('title','Bus Details'); ?>
<?php $__env->startSection('content'); ?> 

<section class="home-section" style="background-color:#F2F6F8;">
<div class="inputfield">
    <br>
        <br>
        <br>
        <br>
        <a href="create_bus">
            <input type="submit" value="ADD NEW BUS" class="btn">
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
                    <th>Bus ID</th>
                    <th>Bus Registration Plate Number</th>
                    <th>Bus Model</th>
                    <th>Registered On</th>
                    <th style="width:105px;">Action</th>
                </tr> 
            </thead>
            <?php $__currentLoopData = $busArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="text-align:center;"><?php echo e($number++); ?></td>
                <td style="text-align:center;"><?php echo e($bus->id); ?></td>
                <td style="text-align:center;"><?php echo e($bus->reg_plate); ?></td>
                <td style="text-align:center;"><?php echo e($bus->model); ?></td>
                <td style="text-align:center;"><?php echo e($bus->created_at); ?></td>
                <td  style="text-align:center;">
                    <a onclick="return confirm('Are you sure?')" href="bus_delete/<?php echo e($bus->id); ?>"><i style="color: #ce3333;" class='del bx bx-trash'></i></a>
                    <a href="bus_edit/<?php echo e($bus->id); ?>"><i style="color: #023e8a;" class='edit bx bx-edit'></i></a>
                </td>
                
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DustBuster\resources\views/bus.blade.php ENDPATH**/ ?>