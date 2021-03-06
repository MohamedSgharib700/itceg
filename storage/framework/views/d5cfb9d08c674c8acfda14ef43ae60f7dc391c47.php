 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة المديرين
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
              <h3 class="box-title">ادوات التحكم</h3>
            </div>

             <section class="content">
      <div class="row">
        <div class="col-xs-12 pull-right" dir="pull-right">
          <div class="box">
            <div class="box-header">
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h3 class="box-title">المديرين الحالين</h3>
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  <th>لينك لنكدان</th>
                  <th>لينك تويتر</th>
                  <th>لينك فيسبوك</th>
                  <th>تخصصه</th>
                  <th>اسم المدير</th>

                </tr>
                </thead>
                <tbody>
              <?php $__currentLoopData = $managers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><a href="maneger_change/<?php echo e($manager->id); ?>/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="maneger_edit/<?php echo e($manager->id); ?>/edit" class="btn btn-success">تعديل</a></td>
                  <td><?php echo e($manager->url_linkedin); ?></td>
                  <td><?php echo e($manager->url_twitter); ?></td>
                  <td><?php echo e($manager->url_face); ?></td>
                  <td><?php echo e($manager->specialty); ?></td>
                  <td><?php echo e($manager->manager); ?></td>
                  
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>

<form action="<?php echo e(url('maneger_show/add')); ?>" method="post" >
<?php echo e(csrf_field()); ?>


 
 <table width="800" height="600" border="0" align="right" >
 <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة مدير جديد</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"><input type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus ></td>
    <?php if($errors->has('name')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
  </div>
    <th width="119"> : اسم المدير</th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('specialty') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"><input type="text" name="specialty"  value="<?php echo e(old('specialty')); ?>" required ></td>
    <?php if($errors->has('specialty')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('specialty')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
    <th width="119"> : التخصص </th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('url_face') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"><input type="text" name="url_face" value="<?php echo e(old('url_face')); ?>" required autofocus ></td>
    <?php if($errors->has('url_face')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('url_face')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
  </div>
    <th width="119"> : لينك الفيس بوك</th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('url_twitter') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"><input type="text" name="url_twitter" value="<?php echo e(old('url_twitter')); ?>" required autofocus ></td>
    <?php if($errors->has('url_twitter')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('url_twitter')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
  </div>
    <th width="119"> : لينك تويتر</th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('url_linkedin') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"><input type="text" name="url_linkedin" value="<?php echo e(old('url_linkedin')); ?>" required autofocus ></td>
    <?php if($errors->has('url_linkedin')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('url_linkedin')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
  </div>
    <th width="119"> : لينك لنكد ان</th>
  </tr>

  <tr>
    <td><input type="submit" name="_submit" value="  حفظ  "></td>
    <td>&nbsp;</td>
    
  </tr>
  </table>
 </form>



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
  <!-- jQuery 3 -->




 
    <!-- /.content -->

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>