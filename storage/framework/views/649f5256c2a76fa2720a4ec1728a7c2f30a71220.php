 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة تعديل العنوان
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
                <div class="panel-heading" dir="rtl">تعديل بيانات التقرير</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('title',['title'=> $title->id])); ?>" >
                        <?php echo e(csrf_field()); ?>

                          
                        <div class="form-group  " dir="rtl">
                            <label for="name" class="col-md-4 control-label pull-right">: العنوان</label>
                              <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required="" name="title" value="<?php echo e($title->title); ?>" >
                                <?php if($errors->has('sup_title')): ?>
                               <span class="help-block">
                               <strong><?php echo e($errors->first('sup_title')); ?></strong>
                                 </span>
                                <?php endif; ?>
                              </div>
                               
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">العنوان الفرعي</label>
                             <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" required name="sub_title" value="<?php echo e($title->sub_title); ?>" >
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