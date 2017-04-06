<?php $__env->startSection('title'); ?>
    Add Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<section class="vbox">
    <section class="scrollable padder">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Workset</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">Add a Product</h3>
        </div>
        <section class="panel panel-default">
            <header class="panel-heading">
                Add Product
                <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
            </header>

            <div class="panel-body">
                <?php echo Form::open(array('route'=>'product.store')); ?>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Product Name</label>
                            <?php echo Form::text('product_name', '', ['placeholder'=>'Enter product name', 'class'=>'form-control input-lg','required']); ?>

                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <?php echo Form::number('price', '', ['placeholder'=>'Enter product price', 'class'=>'form-control input-lg','required']); ?>

                        </div>
                        <div class="form-group">
                            <label>Product Details</label>
                            <?php echo Form::textarea('product_details', '', ['placeholder'=>'Enter product details', 'class'=>'form-control input-lg','rows'=>'3','required']); ?>

                        </div>
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