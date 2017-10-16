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
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  <th>رقم الاتصال</th>
                  <th>حقوق النشر</th>
                  <th>الشعار</th>
                  <th>url لنكيد ان</th>
                  <th>url تويتر</th>
                  <th>url الفيس</th>
                  <th>url اللينك</th>
                  <th>عنوان اللينك</th>

                </tr>
                </thead>
                <tbody>
             
                <tr>
                  <td><a href="footer_change/<?php echo e($footer->id); ?>/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="footer_edit/<?php echo e($footer->id); ?>/edit" class="btn btn-success">تعديل</a></td>
                  <td><?php echo e($footer->Connection); ?></td>
                  <td><?php echo e($footer->copy_right); ?></td> 
                  <td width="180"><img width="100" height="60" src="<?php echo e(asset('logo_footer/'.$footer->logo)); ?> "></td>
                  <td><?php echo e($footer->url_linkedin); ?></td>
                  <td><?php echo e($footer->url_twitter); ?></td>
                  <td><?php echo e($footer->url_face); ?></td>
                  <td><?php echo e($footer->link_url); ?></td>
                  <td><?php echo e($footer->link_name); ?></td>
                  
                </tr>
          
               
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

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>