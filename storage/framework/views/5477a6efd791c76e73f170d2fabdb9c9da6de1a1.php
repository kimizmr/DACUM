<?php $__env->startSection('title'); ?>
    <?php echo e(__('Site Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-4 order-lg-2">
            <div class="card">
                <div class="list-group list-group-flush" id="tabs">
                    <div data-href="#tabs-1" class="list-group-item text-primary">
                        <div class="media">
                            <i class="fas fa-cog pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Invoice Setting')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('Detail of your Invoice.')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div data-href="#tabs-4" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-money-check-alt pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Payment Settings')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('Details about your Payment setting information')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div data-href="#tabs-2" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-file pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('My Billing Detail')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('This detail will show in your Invoice.')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div data-href="#tabs-3" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-percent pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Tax')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('You can manage your tax rate here.')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-1">
            <div id="tabs-1" class="tabs-card">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Invoice Setting')); ?></h5>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => ['settings.store'],'id' => 'update_setting','enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('light_logo', __('Light Logo'),['class' => 'form-control-label'])); ?>

                                    <input type="file" name="light_logo" id="light_logo" class="custom-input-file"/>
                                    <label for="light_logo">
                                        <i class="fa fa-upload"></i>
                                        <span><?php echo e(__('Choose a file…')); ?></span>
                                    </label>
                                    <?php $__errorArgs = ['light_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="light_logo" role="alert">
                                        <small class="text-danger"><?php echo e($message); ?></small>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pt-5">
                                <?php if(!empty($details['light_logo'])): ?>
                                    <img src="<?php echo e(asset(Storage::url($details['light_logo']))); ?>" class="img_setting"/>
                                <?php else: ?>
                                    <img src="<?php echo e(asset(Storage::url('logo/logo.png'))); ?>" class="img_setting"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('dark_logo', __('Dark Logo'),['class' => 'form-control-label'])); ?>

                                    <input type="file" name="dark_logo" id="dark_logo" class="custom-input-file"/>
                                    <label for="dark_logo">
                                        <i class="fa fa-upload"></i>
                                        <span><?php echo e(__('Choose a file…')); ?></span>
                                    </label>
                                    <?php $__errorArgs = ['dark_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="dark_logo" role="alert">
                                        <small class="text-danger"><?php echo e($message); ?></small>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pt-5">
                                <?php if(!empty($details['dark_logo'])): ?>
                                    <img src="<?php echo e(asset(Storage::url($details['dark_logo']))); ?>" class="img_setting"/>
                                <?php else: ?>
                                    <img src="<?php echo e(asset(Storage::url('logo/logo.png'))); ?>" class="img_setting"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('invoice_footer_title', __('Invoice Footer Title'),['class' => 'form-control-label'])); ?>

                                    <input type="text" name="invoice_footer_title" id="invoice_footer_title" class="form-control" value="<?php echo e($details['invoice_footer_title']); ?>"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('invoice_footer_note', __('Invoice Footer Note'),['class' => 'form-control-label'])); ?>

                                    <small class="form-text text-muted mb-2 mt-0"><?php echo e(__('This textarea will autosize while you type')); ?></small>
                                    <?php echo e(Form::textarea('invoice_footer_note', $details['invoice_footer_note'], ['class' => 'form-control','rows' => '1','data-toggle' => 'autosize'])); ?>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                <a href="<?php echo e(route('invoice.template.setting')); ?>" class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Invoice Template Setting')); ?></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-right pt-3">
                                <?php echo e(Form::hidden('from','invoice_setting')); ?>

                                <button type="submit" class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
            <div id="tabs-2" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('My Billing Detail')); ?></h5>
                        <small><?php echo e(__('This detail will show in your Invoice.')); ?></small>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => ['settings.store'],'id' => 'update_billing_setting','enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('address', __('Address'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('address', $details['address'], ['class' => 'form-control','required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('city', __('City'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('city', $details['city'], ['class' => 'form-control','required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('state', __('State'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('state', $details['state'], ['class' => 'form-control','required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('zipcode', __('Zip/Post Code'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('zipcode', $details['zipcode'], ['class' => 'form-control','required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('country', __('Country'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('country', $details['country'], ['class' => 'form-control','required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('telephone', __('Telephone'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('telephone', $details['telephone'], ['class' => 'form-control','required' => 'required'])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <?php echo e(Form::hidden('from','billing_setting')); ?>

                            <button type="submit" class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
            <div id="tabs-3" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-0"><?php echo e(__('Tax')); ?></h6>
                            </div>
                            <div class="col-auto">
                                <div class="actions">
                                    <a href="#" class="action-item" data-url="<?php echo e(route('taxes.create')); ?>" data-ajax-popup="true" data-size="md" data-title="<?php echo e(__('Add Tax')); ?>">
                                        <i class="fas fa-plus"></i>
                                        <span class="d-sm-inline-block"><?php echo e(__('Add')); ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Rate %')); ?></th>
                                    <th class="w-25"><?php echo e(__('Action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(Auth::user()->taxes->count() > 0): ?>
                                    <?php $__currentLoopData = Auth::user()->taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($tax->name); ?></td>
                                            <td><?php echo e($tax->rate); ?></td>
                                            <td>
                                                <div class="actions">
                                                    <a href="#" class="action-item px-2" data-url="<?php echo e(route('taxes.edit',$tax)); ?>" data-ajax-popup="true" data-size="md" data-title="<?php echo e(__('Edit')); ?>" data-toggle="tooltip" data-original-title="<?php echo e(__('Edit')); ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="action-item text-danger px-2" data-toggle="tooltip" data-original-title="<?php echo e(__('Delete')); ?>" data-confirm="<?php echo e(__('Are You Sure?')); ?>|<?php echo e(__('This action can not be undone. Do you want to continue?')); ?>" data-confirm-yes="document.getElementById('delete-tax-<?php echo e($tax->id); ?>').submit();">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                                <?php echo Form::open(['method' => 'DELETE', 'route' => ['taxes.destroy',$tax->id],'id'=>'delete-tax-'.$tax->id]); ?>

                                                <?php echo Form::close(); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <th scope="col" colspan="3"><h6 class="text-center"><?php echo e(__('No Taxes Found.')); ?></h6></th>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-4" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Payment Settings')); ?></h5>
                        <small><?php echo e(__('This detail will use for collect payment on invoice from clients. On invoice client will find out pay now button based on your below configuration.')); ?></small>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => ['settings.store'],'id' => 'update_setting'])); ?>

                        <div class="row">
                            <div class="col-6 py-2">
                                <h5 class="h5"><?php echo e(__('Stripe')); ?></h5>
                            </div>
                            <div class="col-6 py-2 text-right">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="enable_stripe" id="enable_stripe" <?php echo e(($details['enable_stripe'] == 'on') ? 'checked' : ''); ?>>
                                    <label class="custom-control-label form-control-label" for="enable_stripe"><?php echo e(__('Enable Stripe')); ?></label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('stripe_key', __('Stripe Key'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('stripe_key', $details['stripe_key'], ['class' => 'form-control','placeholder' => __('Stripe Key')])); ?>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('stripe_secret', __('Stripe Secret'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('stripe_secret', $details['stripe_secret'], ['class' => 'form-control','placeholder' => __('Stripe Secret')])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-6 py-2">
                                <h5 class="h5"><?php echo e(__('PayPal')); ?></h5>
                            </div>
                            <div class="col-6 py-2 text-right">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="enable_paypal" id="enable_paypal" <?php echo e(($details['enable_paypal'] == 'on') ? 'checked' : ''); ?>>
                                    <label class="custom-control-label form-control-label" for="enable_paypal"><?php echo e(__('Enable Paypal')); ?></label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pb-4">
                                <label class="paypal-label form-control-label" for="paypal_mode"><?php echo e(__('Paypal Mode')); ?></label> <br>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary btn-sm <?php echo e($details['paypal_mode'] == '' || $details['paypal_mode'] == 'sandbox' ? 'active' : ''); ?>">
                                        <input type="radio" name="paypal_mode" value="sandbox" <?php echo e($details['paypal_mode'] == '' || $details['paypal_mode'] == 'sandbox' ? 'checked' : ''); ?>><?php echo e(__('Sandbox')); ?>

                                    </label>
                                    <label class="btn btn-primary btn-sm <?php echo e($details['paypal_mode'] == 'live' ? 'active' : ''); ?>">
                                        <input type="radio" name="paypal_mode" value="live" <?php echo e($details['paypal_mode'] == 'live' ? 'checked' : ''); ?>><?php echo e(__('Live')); ?>

                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('paypal_client_id', __('Client ID'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('paypal_client_id', $details['paypal_client_id'], ['class' => 'form-control','placeholder' => __('Client ID')])); ?>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('paypal_secret_key', __('Secret Key'),['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('paypal_secret_key', $details['paypal_secret_key'], ['class' => 'form-control','placeholder' => __('Secret Key')])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="text-right">
                                    <?php echo e(Form::hidden('from','payment')); ?>

                                    <button type="submit" class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                                </div>
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        // For Sidebar Tabs
        $(document).ready(function () {
            $('.list-group-item').on('click', function () {
                var href = $(this).attr('data-href');
                $('.tabs-card').addClass('d-none');
                $(href).removeClass('d-none');
                $('#tabs .list-group-item').removeClass('text-primary');
                $(this).addClass('text-primary');
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DACUM\resources\views/users/owner_setting.blade.php ENDPATH**/ ?>