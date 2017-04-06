<?php $__env->startSection('title'); ?>
    Edit Order
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
                <?php echo Form::model($order, array('method'=>'PATCH','route' => array('order.update', $order->id))); ?>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <?php echo Form::text('name', null, ['placeholder'=>'Enter full name', 'class'=>'form-control input-lg','required']); ?>

                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <?php echo Form::text('phone', null, ['placeholder'=>'Enter phone number', 'class'=>'form-control input-lg','required']); ?>

                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <?php echo Form::textarea('address', null, ['placeholder'=>'Enter full address', 'class'=>'form-control input-lg','rows'=>'3','required']); ?>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Delivery Date</label>
                            <?php echo Form::date('delivery_date', null, [ 'class'=>'form-control input-lg','required']); ?>

                        </div>
                        <div class="form-group">
                            <label>Product ID</label>
                            <?php echo Form::select('product_id', $product, null, ['id'=>'product_id', 'class'=>'form-control m-b input-lg','required']); ?>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Pament Option</label>
                                    <?php echo Form::select('payment_option', array( 'Postpay' => 'Postpay', 'Prepay (Full)' => 'Prepay (full)', 'Prepay (Half)' => 'Prepay (Half)'), null, ['class'=>'form-control m-b input-lg','required']); ?>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <?php echo Form::number('quantity', null, ['placeholder'=>'Enter quantity', 'class'=>'form-control input-lg','required']); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2">Status</label>
                                <div class="col-sm-10 ">
                                    <label class="radio-custom col-md-2 input-md"><?php echo Form::radio('order_status', 'Confirm'); ?><i class="fa fa-circle-o fa-1x"></i>Confirm </label>
                                    <label class="radio-custom col-md-2 input-md"><?php echo Form::radio('order_status', 'Ready'); ?><i class="fa fa-circle-o"></i>Item Ready </label>
                                    <label class="radio-custom col-md-2 input-md"><?php echo Form::radio('order_status', 'Send'); ?><i class="fa fa-circle-o"></i>Send </label>
                                    <label class="radio-custom col-md-2 input-md"><?php echo Form::radio('order_status', 'Delivered'); ?><i class="fa fa-circle-o"></i>Delivered </label>
                                    <label class="radio-custom col-md-2 input-md"><?php echo Form::radio('order_status', 'Returned'); ?><i class="fa fa-circle-o"></i>Returned </label>
                                    <label class="radio-custom col-md-2 input-md"><?php echo Form::radio('order_status', 'Cancelled'); ?><i class="fa fa-circle-o"></i>Cancelled </label>
                                </div>
                            </div>
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