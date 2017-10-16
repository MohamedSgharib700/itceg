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
            <h3 class="box-title">عرض المنتجات</h3>
            
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  <th>الصوره</th>
                  <th>الاسم الفرعي</th>
                  <th>اسم المنتج</th>

                </tr>
                </thead>
                <tbody>
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><a href="products_page/<?php echo e($products->id); ?>/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="products/<?php echo e($products->id); ?>/edit" class="btn btn-success">تعديل</a></td>
                  <td><img width="80" height="60" src="<?php echo e(asset('productsAdd/'.$products->image)); ?>"></td>
                  <td><?php echo e($products->sub_title); ?></td>
                  <td><?php echo e($products->title); ?></td>
                  
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



 <form enctype="multipart/form-data" action="<?php echo e(url('products/add')); ?>" method="post" >
<?php echo e(csrf_field()); ?>



 <table width="800" height="600" border="0" align="right">
  <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة منتج جديد</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
    <td width="218"><input type="text" name="name" value="" required ></td>
    <?php if($errors->has('sup_title')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('sup_title')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
    <th width="119"> : اسم المنتج </th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
    <td width="218"><input type="text" name="sub_name" value="" required ></td>
    <?php if($errors->has('sup_title')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('sup_title')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
    <th width="119"> : الاسم الفرعي </th>
  </tr>
  <tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div align="center" class="form-group<?php echo e($errors->has('image_add') ? ' has-error' : ''); ?>">
    <td width="218"><input type="file" name="image_add" value="" required="" ></td>
    <?php if($errors->has('image_add')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('image_add')); ?></strong>
           </span>
        <?php endif; ?>
        </div>
    <th width="119"> : الصوره </th>
  </tr>
  <tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
    <td width="218"><select name="foran_key">
<option value="<?php echo e($products->id=1); ?>">مواقع
<option value="<?php echo e($products->id=2); ?>">تصميمات
<option value="<?php echo e($products->id=3); ?>">تسويق
<option value="<?php echo e($products->id=4); ?>">تطبيقات
</select></td>
    <?php if($errors->has('sup_title')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('sup_title')); ?></strong>
           </span>
        <?php endif; ?>
        </div>
    <th width="119"> : صنف المنتج </th>
  </tr>
  <tr>
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('sup_title') ? ' has-error' : ''); ?>">
    <td><textarea name="detils" class="textarea" placeholder="Place some text here" required style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
    <?php if($errors->has('sup_title')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('sup_title')); ?></strong>
           </span>
        <?php endif; ?>
        </div>
    <th> : التفاصيل</th>
  </tr>
  
  <tr>
    <th height="33" colspan="3" scope="row"></th>
    </tr>

    <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('url_Title') ? ' has-error' : ''); ?>">
    <td width="218"><input type="text" name="url_Title" value="" required ></td>
    <?php if($errors->has('url_Title')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('url_Title')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
    <th width="119"> : URL عنوان المنتج  </th>
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




 <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('textarea').wysihtml5()
  })
</script>
    <!-- /.content -->

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>