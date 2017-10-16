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
                <div class="panel-heading" dir="rtl">تعديل البيانات</div>
                <div class="panel-body">
                  <form class="form-horizontal" method="POST" action="<?php echo e(route('headers',['headers'=> $headers->id])); ?>" >
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
                            <label for="name" class="col-md-4 control-label pull-right">: ميتا العنوان</label>
                            <div class="form-group<?php echo e($errors->has('metaTitles') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required="" name="title" value="<?php echo e($headers->metaTitles); ?>" >
                                <?php if($errors->has('metaTitles')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('metaTitles')); ?></strong>
                                    </span>
                                  <?php endif; ?>

                              </div>
                            </div>
                        </div>

                        <div class="form-group  " dir="rtl">
                            <label for="name" class="col-md-4 control-label pull-right">: ميتا التفاصيل</label>
                            <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                              <td><textarea name="description" class="textarea" required placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($headers->metaDescrabtions); ?></textarea></td>
                                <?php if($errors->has('description')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                  <?php endif; ?>

                              </div>
                            </div>
                        </div>

                      <div class="form-group  " dir="rtl">
                            <label for="name" class="col-md-4 control-label pull-right">: ميتا الكلمات الداله</label>
                            <div class="form-group<?php echo e($errors->has('keywords') ? ' has-error' : ''); ?>">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required="" name="keywords" value="<?php echo e($headers->keyWords); ?>" >
                                <?php if($errors->has('keywords')): ?>
                                    <span class="help-block">
                                     <strong><?php echo e($errors->first('keywords')); ?></strong>
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