 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة تعديل البيانات
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
                <div class="panel-heading" dir="rtl">تعديل البيانات</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype= multipart/form-data method="POST" action="<?php echo e(route('aboutUs',['contents'=> $contents->id])); ?>" >
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
                            <label for="name" class="col-md-4 control-label pull-right">العنوان الاول</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title1" value="<?php echo e($contents->title1); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group  " dir="rtl">
                            <label for="name" class="col-md-4 control-label pull-right">العنوان الاول</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title2" value="<?php echo e($contents->title2); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">1 الصوره</label>

                            <div class="col-md-6">
                                <input id="text" type="file" class="form-control" name="images1" value="<?php echo e($contents->image1); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">2 الصوره</label>

                            <div class="col-md-6">
                                <input id="text" type="file" class="form-control" name="images2" value="<?php echo e($contents->image2); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">3 الصوره</label>

                            <div class="col-md-6">
                                <input id="text" type="file" class="form-control" name="images3" value="<?php echo e($contents->image3); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">4 الصوره</label>

                            <div class="col-md-6">
                                <input id="text" type="file" class="form-control" name="images4" value="<?php echo e($contents->image4); ?>" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label pull-right">التفاصيل1</label>

                            <div class="col-md-6">
                                <textarea class="textarea " name="detils1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($contents->content1); ?></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label pull-right">التفاصيل2</label>

                            <div class="col-md-6">
                                <textarea class="textarea " name="detils2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($contents->content2); ?></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label pull-right">التفاصيل3</label>

                            <div class="col-md-6">
                                <textarea class="textarea " name="detils3" placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($contents->content3); ?></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">التوقيع</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="signing" value="<?php echo e($contents->signing); ?>" >

                                
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

  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('textarea').wysihtml5()
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>