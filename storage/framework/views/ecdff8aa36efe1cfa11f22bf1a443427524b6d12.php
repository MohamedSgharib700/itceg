 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة العملاء
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
            <h3 class="box-title">العملاء الحالين</h3>
              <table id="example2" class="table table-bordered table-hover pull-right" dir="rtl">
                <thead align="right">
                <tr>
                  <th>الحذف</th>
                  <th>تعديل</th>
                  <th>الصوره</th>
                  

                </tr>
                </thead>
                <tbody align="right">
              <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><a href="customers_change/<?php echo e($customers->id); ?>/delete" class="btn btn-danger">حذف</a></td>
                <td><a href="customers_edit/<?php echo e($customers->id); ?>/edit" class="btn btn-success">تعديل</a></td>
                  <td><img width="80" height="60" class="img-responsive" src="<?php echo e(asset('customer_logos/'.$customers->image)); ?>" ></td>
                  
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         <form action="<?php echo e(url('customers_show/add')); ?>" method="post" enctype="multipart/form-data" >
<?php echo e(csrf_field()); ?>


 
 <table width="800" height="600" border="0" align="right" >
 <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;تعديل لوجو العميل</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('customer_logo') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"><input type="file" name="customer_logo" value="<?php echo e(old('customer_logo')); ?>" required autofocus ></td>
    <?php if($errors->has('customer_logo')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('customer_logo')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
  </div>
    <th width="119"> : اضف لوجو العميل</th>
  </tr>
  
   
   
    <td><input type="submit" name="_submit" value="  حفظ  "></td>
    <td>&nbsp;</td>
    
  </tr>
  </table>
 </form>
        </div>
        <!-- /.col -->
      </div>
    </section>





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