 
 <?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
       صفحة الخدمات
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الملف الشخصي</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section align="right" class="content">
      

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            
            <div class="box-body">
            <form method="POST" action="<?php echo e(route('contents',['content'=> $content->id])); ?>">
              <?php echo e(csrf_field()); ?>

            <table align="right">
              <thead>
                <tr>

                 
                 <th > تفاصيل الخدمه</th>
                 <th ">عنوان الخدمه</th>
                </tr>
              </thead>

              <tr>
                
                <td ><textarea  name="content1" cols="30" rows="1"><?php echo e($content->content1); ?> </textarea></td>
                <td ><input type="text"  name="title1"  value="<?php echo e($content->title1); ?>"></td>
                <th>:  الخدمه الاولي</th> 
              </tr>
                
              </tbody>

              <thead>
                <tr>
                 <th > تفاصيل الخدمه</th>
                 <th ">عنوان الخدمه</th>
                </tr>
              </thead>

              <tr>
                
                <td ><textarea name="content2"  cols="30" rows="1"><?php echo e($content->content2); ?> </textarea></td>
                <td ><input type="text"  name="title2"  value="<?php echo e($content->title2); ?>" ></td>
                <th>:  الخدمه الثانيه</th>
              </tr>
                
              </tbody>

              <thead>
                <tr>
                 <th > تفاصيل الخدمه</th>
                 <th ">عنوان الخدمه</th>
                </tr>
              </thead>

              <tr>
                
                <td ><textarea name="content3"  cols="30" rows="1"><?php echo e($content->content3); ?> </textarea></td>
                <td ><input type="text" name="title3" value="<?php echo e($content->title3); ?>" ></td>
                <th>:  الخدمه الثالثه</th>
              </tr>
                
              </tbody>
               <br>
               <br>
              <thead>
                <tr>
                 <th > تفاصيل الخدمه</th>
                 <th ">عنوان الخدمه</th>
                </tr>
              </thead>

              <tr>
                
                <td ><textarea name="content4"  cols="30" rows="1"><?php echo e($content->content4); ?> </textarea></td>
                <td ><input type="text" name="title4"   value="<?php echo e($content->title4); ?>"></td>
                <th>:  الخدمه الرابعه</th>
              </tr>
                
              </tbody>

               <tr>
                <th height="37" scope="row"><button type="submit" class="btn btn-primary">
                                    حفظ
                                </button></th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
               </tr>
            </table>
          </form>
      
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