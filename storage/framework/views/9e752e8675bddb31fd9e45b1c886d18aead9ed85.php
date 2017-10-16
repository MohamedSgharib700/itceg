 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة المنتجات
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
            <h3 class="box-title">عرض الشرائح</h3>
            
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  <th>الصوره</th>
                  <th>العنوان الفرعي</th>
                  <th>العنوان</th>
                </tr>
                </thead>
                <tbody>
              <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                <td><a href="slides_change/<?php echo e($slide->id); ?>/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="slides/<?php echo e($slide->id); ?>/edit" class="btn btn-success">تعديل</a></td>
                  <td><img width="100" height="60" src="<?php echo e(asset('slides/'.$slide->image)); ?>" ></td>
                  <td><?php echo e($slide->content); ?></td>
                  <td><?php echo e($slide->title); ?></td>
                  
                  
                  
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



<form enctype="multipart/form-data" action="<?php echo e(url('slides_change')); ?>" method="post" >
<?php echo e(csrf_field()); ?>



 <table width="800" height="600" border="0" align="right">
  <table width="505" height="297" border="0" align="right">
  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <td width="218"><input type="text" name="title" value="" ></td>
    <th width="119"> : العنوان</th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <td width="218"><input type="text" name="sup_title" value="" ></td>
    <th width="119"> : العنوان الفرعي </th>
  </tr>
  <tr>
  
    <th height="42" scope="row">&nbsp;</th>
    <td><input type="file" name="slides_change" max="30000"  value="" /></td>
    <th> : اختر الشرائح</th>
  </tr>
  
  <tr>
    <th height="33" colspan="3" scope="row"></th>
    </tr>
  <tr>
    <td><input type="submit" name="_submit" value="  حفظ  "></td>
    <td>&nbsp;</td>
    <th height="37" scope="row"></th>
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