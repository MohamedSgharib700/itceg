 
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
    <section  class="content" ">
      
      
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h5 class="box-title"></h5>

              <div class="box-tools">
                
                  

                  <div class=" input-group-btn">
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table  class=" table table-hover " >
                <tr>
                  <th>الرقم</th>
                  <th>عنوان الخدمه</th>
                  <th>التفاصيل</th>
                </tr>
                <tr>
                  <td>1</td>
            
                  <td><span class="label label-success"><?php echo e($content->title1); ?></span></td>
                  <td><?php echo e($content->content1); ?></td>
                </tr>
                <tr>
                  <td>2</td>
                  
                  <td><span class="label label-warning"><?php echo e($content->title2); ?></span></td>
                  <td><?php echo e($content->content2); ?></td>
                </tr>
                <tr>
                  <td>3</td>
                  
                  <td><span class="label label-primary"><?php echo e($content->title3); ?></span></td>
                  <td><?php echo e($content->content3); ?></td>
                </tr>
                <tr>
                  <td>4</td>
                  

                  <td><span class="label label-danger"><?php echo e($content->title4); ?></span></td>
                  <td><?php echo e($content->content4); ?></td>
                </tr>
                <tr>
                  <form method="POST" action="content/<?php echo e($content->id); ?>/edit">
                    <?php echo e(csrf_field()); ?>

                  <td> <div class="input-group">
                    <span class="input-group-btn">
                   <button class="btn btn-default" href="" type="submit">تعديل</button>
                  </span>
                </div> </td>
                </form>
           </tr> 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>


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