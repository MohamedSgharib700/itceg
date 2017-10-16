 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        (الصفحه الرئيسيه(تعريف الشركه
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
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('contact',['contact'=> $contact->id])); ?>" >
                        <?php echo e(csrf_field()); ?>


                     <div class="form-group  " dir="rtl">
                            <label for="name" class="col-md-4 control-label pull-right">1 اسم المدينه</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="sity1" value="<?php echo e($contact->title2); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">1 العنوان</label>

                            <div class="col-md-6">
                              <input id="text" type="text" class="form-control" name="address1" value="<?php echo e($contact->address1); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">1 رقم المحمول</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="phone1" value="<?php echo e($contact->phone1); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">1ايمال</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="email1" value="<?php echo e($contact->email1); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">1 لينك التوجيه </label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="url1" value="<?php echo e($contact->url1); ?>" >

                                
                            </div>
                       


                        <div class="form-group  " dir="rtl">
                            <label for="name" class="col-md-4 control-label pull-right">2 اسم المدينه</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="sity2" value="<?php echo e($contact->title3); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">2 العنوان</label>

                            <div class="col-md-6">
                              <input id="text" type="text" class="form-control" name="address2" value="<?php echo e($contact->address2); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">2 رقم المحمول</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="phone2" value="<?php echo e($contact->phone2); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">2ايمال</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="email2" value="<?php echo e($contact->email2); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">1 لينك التوجيه </label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="url2" value="<?php echo e($contact->url2); ?>" >

                                
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">3 العنوان</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="title3" value="<?php echo e($contact->title4); ?>" >

                                
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