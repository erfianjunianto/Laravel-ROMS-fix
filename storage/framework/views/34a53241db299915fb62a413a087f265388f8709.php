<?php $__env->startSection('title'); ?>
	Change Password
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<section class="vbox">
    <section class="scrollable padder">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Workset</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">Add a Order</h3>
        </div>
        <section class="panel panel-default">
            <header class="panel-heading">
                Add Order
                <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
            </header>

            <div class="panel-body">

                <?php echo Form::open(array('method'=>'POST')); ?>

                    <div class="col-sm-6">

                    	<?php if($errors): ?>
						   	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						      	<div class="alert alert-danger"><?php echo e($error); ?></div>
						  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>

                        <div class="form-group">
                            <label>Current Password</label>
                            <?php echo Form::password('mypassword', ['placeholder'=>'Enter Current Password', 'class'=>'form-control input-lg']); ?>

                        </div>
                        <br>
                        <div class="form-group">
                            <label>New Password</label>
                            <?php echo Form::password('password', ['placeholder'=>'Enter New Password', 'class'=>'form-control input-lg']); ?>

                            <span class="pull-right"><i>Password length minimum 6 and maximum 18 </i></span>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <?php echo Form::password('password_confirmation', ['placeholder'=>'Confirm Password', 'class'=>'form-control input-lg']); ?>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo e(asset('images/lock.jpg')); ?>" width="80%" class="pull-right">
                    </div>
                    <div class="col-md-12">
                        <div class="line line-dashed line-lg pull-in"></div>
                        <?php echo Form::submit('Submit', [ 'class'=>'btn btn-default']); ?>

                    </div>
                <?php echo Form::close(); ?>

            </div>

        </section>
    </section>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>