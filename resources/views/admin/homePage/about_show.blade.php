@extends('admin.layouts.layout')

 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة تعريف الشركه
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
                  
                  <th>تعريف للشركه</th>
                  <th>العنوان الفرعي</th>
                  <th>العنوان</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  
                  <td>{!! $about->content !!}</td>
                  <td>{{$about->sub_title}}</td>
                  <td>{{$about->title}}</td>
                </tr>
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>




      <!-- /.row -->
    </section>

<form action="{{url('about_show')}}" method="post" >
{{csrf_field()}}


 <table width="800" height="600" border="0" align="right">
 <div></div>
  <tr>
    
    <td> </td>
    <td width="218"></td>
   
  </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="title" value="" required ></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th width="119"> : العنوان</th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="sub_title" value="" required ></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th width="119"> : العنوان الفرعي </th>
  </tr>
  <tr>
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td><textarea class="textarea" name="detils" placeholder="Place some text here" required style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th> : تعريف للشركه</th>
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

 @endsection