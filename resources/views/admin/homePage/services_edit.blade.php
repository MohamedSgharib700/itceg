@extends('admin.layouts.layout')
 
 @section('content')

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
            <form method="POST" action="{{route('contents',['content'=> $content->id]) }}">
{{csrf_field()}}


 <table width="800" height="600" border="0" align="right">
  <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;التعديل علي الخدمات</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="title1" required value="{{$content->title1}}" ></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : اسم الخدمه </th>
  </tr>
  
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td><textarea name="content1" class="textarea" placeholder="Place some text here" required="" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$content->content1}}</textarea></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    </div>
    <th> : التفاصيل</th>
  </tr>
  
  <tr>
    <th height="33" colspan="3" scope="row"></th>
    </tr>

    <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="title2" required="" value="{{$content->title2}}" ></td>
     @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th width="119"> : اسم الخدمه </th>
  </tr>
  
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td><textarea name="content2" class="textarea" required="" placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$content->content2}}</textarea></td>
     @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th> : التفاصيل</th>
  </tr>
  
  <tr>
    <th height="33" colspan="3" scope="row"></th>
    </tr>

    <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="title3" value="{{$content->title3}}  " required></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th width="119"> : اسم الخدمه </th>
  </tr>
  
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td><textarea name="content3" class="textarea" placeholder="Place some text here" required style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$content->content3}}</textarea></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th> : التفاصيل</th>
  </tr>
  
  <tr>
    <th height="33" colspan="3" scope="row"></th>
    </tr>

    <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="title4" required="" value="{{$content->title4}}" ></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th width="119"> : اسم الخدمه </th>
  </tr>
  
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td><textarea name="content4" class="textarea" placeholder="Place some text here" required style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$content->content4}}</textarea></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th> : التفاصيل</th>
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

  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('textarea').wysihtml5()
  })
</script>

 @endsection