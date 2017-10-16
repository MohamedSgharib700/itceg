<?php $__env->startSection('content'); ?>

  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
              <table id="example2" align="right" class="table table-bordered table-hover">
                <thead>

                <tr>
                  
                  <th>رقم المشرف</th>
                  <th>اسم المشرف</th>
                  <th>حساب المشرف</th>
                   

                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $shows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                
                  <td><?php echo e($show->id); ?></td>

                  <td><?php echo e($show->name); ?></td>

                  <td> <?php echo e($show->email); ?></td>
                   

                   <?php if(Auth::user()->id == $show->id): ?>
                   
                  <form method="post" action="edit/<?php echo e($show->id); ?>/edit">
                    <?php echo e(csrf_field()); ?>

                  <td> <div class="input-group">
                    <span class="input-group-btn">
                   <button class="btn btn-default" href="" type="submit">تعديل</button>
                  </span>
                </div> </td>
                </form>
                <?php endif; ?>


                 <td> <div class="col-xs-4">
	             <div><a href="users_show/<?php echo e($show->id); ?>/delete" class="btn btn-danger pull-right">حذف</a> </div>
	             </div> </td>
                  
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tfoot>
              </table>
             
            </div>
            <!-- /.box-body -->
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>