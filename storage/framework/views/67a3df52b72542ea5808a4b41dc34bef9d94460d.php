 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة تغير المحتوي
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الملف الشخصي</a></li>
      </ol>
    </section>


    <!-- Main content -->
    <section align="right" class="content">


      <div class="row">
        <div class="col-xs-12 pull-right">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>

<div class="container pull-right" dir="rtl">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default 12" >
                <div class="panel-heading" dir="rtl">تعديل بيانات العميل</div>
                <div class="panel-body">
                   <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo e(route('footer',['footer'=> $footer->id])); ?>" >
                        <?php echo e(csrf_field()); ?>

                         <?php if(count($errors)>0): ?>
                           <div class="alert alert_danger">
                              <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li> <?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </ul>
                               </div>
                              <?php endif; ?>     

                        <div class="form-group  " dir="rtl">
                            <label for="name" class="col-md-4 control-label pull-right">: عنوان اللينك</label>
                            <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required="" name="url_title" value="<?php echo e($footer->link_name); ?>" >
                                <?php if($errors->has('sup_title')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('sup_title')); ?></strong>
                                    </span>
                                  <?php endif; ?>

                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">: url اللينك</label>
                           <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" required name="url_linke" value="<?php echo e($footer->link_url); ?>" >
                                <?php if($errors->has('sup_title')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('sup_title')); ?></strong>
                                    </span>
                                  <?php endif; ?>

                               </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">: url الفيس بوك</label>
                           <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" required name="url_face" value="<?php echo e($footer->url_face); ?>" >
                                <?php if($errors->has('sup_title')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('sup_title')); ?></strong>
                                    </span>
                                  <?php endif; ?>

                             </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">: url تويتر</label>
                             <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" required name="url_twitter" value="<?php echo e($footer->url_twitter); ?>" >
                                <?php if($errors->has('sup_title')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('sup_title')); ?></strong>
                                    </span>
                                  <?php endif; ?>

                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">: url لينكد ان</label>
                            <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" required name="url_linkedin" value="<?php echo e($footer->url_linkedin); ?>" >
                                <?php if($errors->has('sup_title')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('sup_title')); ?></strong>
                                    </span>
                                  <?php endif; ?>


                              </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">: اللشعار</label>
                          <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="text" type="file" class="form-control"  name="change_logo" value="<?php echo e($footer->logo); ?>" >
                                <?php if($errors->has('sup_title')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('sup_title')); ?></strong>
                                    </span>
                                  <?php endif; ?>

                              </div>
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">: رقم الاتصال</label>
                            <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                              <input id="text" type="" class="form-control" required name="phone" value="<?php echo e($footer->Connection); ?>" >
                              <?php if($errors->has('sup_title')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('sup_title')); ?></strong>
                                    </span>
                                  <?php endif; ?>
                                </div>

                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    تعديل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<table width="800" height="600" border="0" align="right" >
 <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"></td>
    <?php if($errors->has('name')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
  </div>
    
  
  </table>
    <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    <!-- /.content -->
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>