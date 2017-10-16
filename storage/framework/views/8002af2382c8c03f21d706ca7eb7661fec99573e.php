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
            <h3 class="box-title"><?php echo e($abouts->title); ?></h3>
            <h5 class="box-title"><?php echo e($abouts->content); ?></h5>
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  <th>التوقيع</th>
                  <th>العنوان الثاني</th>
                  <th>العنوان الاول</th>

                </tr>
                </thead>
                <tbody>
              
                <tr>
                <td><a href="about_change/<?php echo e($contents->id); ?>/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="about_edit/<?php echo e($contents->id); ?>/edit" class="btn btn-success">تعديل</a></td>
                  <td><?php echo e($contents->signing); ?></td>
                  <td><?php echo e($contents->title2); ?></td>
                  <td><?php echo e($contents->title1); ?></td>
                  
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

<form action="<?php echo e(url('clients_show/add')); ?>" method="post" >
<?php echo e(csrf_field()); ?>


 
 <table width="800" height="600" border="0" align="right" >
 <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة عنوان جديد</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"><input type="text" name="title" value="<?php echo e(old('title')); ?>" required autofocus ></td>
    <?php if($errors->has('title')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('title')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
  </div>
    <th width="119"> : العنوان</th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group<?php echo e($errors->has('sub_title') ? ' has-error' : ''); ?>">
      <div class="col-md-6">
    <td width="218"><input type="text" name="sub_title"  value="<?php echo e(old('sub_title')); ?>" required ></td>
    <?php if($errors->has('sub_title')): ?>
           <span class="help-block">
            <strong><?php echo e($errors->first('sub_title')); ?></strong>
           </span>
        <?php endif; ?>
    </div>
    <th width="119"> : العنوان الفرعي </th>
  </tr>

  <tr>
    <td><input type="submit" name="_submit" value="  حفظ  "></td>
    <td>&nbsp;</td>
    
  </tr>
  </table>
 </form>

 <form action="<?php echo e(url('client_show/add')); ?>" method="post" >
<?php echo e(csrf_field()); ?>



 <table width="800" height="600" border="0" align="right">
  <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة بيانات جديده</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <td width="218"><input type="text" name="name" value="" ></td>
    <th width="119"> : العنوان الاول </th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <td width="218"><input type="text" name="company_name" value="" ></td>
    <th width="119"> : العنوان الثاني </th>
  </tr>
  <tr>
  
    <th height="42" scope="row">&nbsp;</th>
    <td><textarea name="detils1" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
    <th> : تفاصيل1</th>
  </tr>

  <th height="42" scope="row">&nbsp;</th>
    <td><textarea name="detils2" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
    <th> : تفاصيل2</th>
  </tr>

  <th height="42" scope="row">&nbsp;</th>
    <td><textarea name="detils3" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
    <th> : تفاصيل3</th>
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