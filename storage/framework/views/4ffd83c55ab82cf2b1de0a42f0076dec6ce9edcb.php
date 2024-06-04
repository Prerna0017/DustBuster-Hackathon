
<?php $__env->startSection('title','Bus Registration'); ?>
<?php $__env->startSection('content'); ?>

<section class="home-section" style="background-color:#F2F6F8;">
    <br>
    <br>
    <br>
    <div class="container">
        <div class="title">BUS REGISTRATION</div>
        <div class="content">
            <form class="form" method="post" action="bus_submit">
                <br/>
                <?php echo csrf_field(); ?>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Registration Plate Number</span>
                        <input type="text" name="reg_plate" class="input" value="<?php echo e(old('reg_plate')); ?>"
                            placeholder="Enter the Registration Plate Number here" required>
                        <br>
                        <span style="color:red"><?php $__errorArgs = ['reg_plate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                        <br>
                    </div>

                    <div class="input-box">
                        <span class="details">Bus Model</span>
                        <select required name="model">
                            <option value="">Select</option>
                            <option value="Model 1">Model 1</option>
                            <option value="Model 2">Model 2</option>
                        </select>
                        <br>
                        <!-- <span style = "color:red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> -->
                        <br>
                    </div> 
                    
                </div>
                
                <div style="display:inline-flex;">
                    <div class="button" style="justify-content:center;">
                        <a href="bus_show">
                            <input type="button" value="BACK">
                        </a>
                    </div>
                    <div class="button">
                        <input type="submit" value="SUBMIT">
                    </div>

                </div>
            </form>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DustBuster\resources\views/create_bus.blade.php ENDPATH**/ ?>