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
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover pull-right" dir="right">
                <thead>
                <tr>
                  
                  <th>التعديل</th>
                  <th>العنوان الفرعي</th>
                  <th>العنوان</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  
                  <td><a href="title_edit/{{$title->id}}/edit" class="btn btn-success">تعديل</a></td>
                  <td>{{$title->sub_title}}</td>
                  <td>{{$title->title}}</td>
                </tr>
               
                </tfoot>
              </table>
            </div>
            <div class="box-body">
            <h3 class="box-title">عرض للخدمات</h3>
            
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  
                  <th>الصوره</th>
                  <th>الاسم الفرعي</th>
                  <th>اسم الخدمه</th>

                </tr>
                </thead>
                <tbody>
              @foreach($servicesRequest as $servicesRequest)
                <tr>
                <td><a href="services_page/{{$servicesRequest->id}}/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="services/{{$servicesRequest->id}}/edit" class="btn btn-success">تعديل</a></td>
                  <td><img width="80" height="60" src="{{asset('servicesAdd/'.$servicesRequest->image)}}"></td>
                  <td>{{$servicesRequest->sub_title}}</td>
                  <td>{{$servicesRequest->title}}</td>
                  
                </tr>
              @endforeach
               
                </tfoot>
              </table>
            </div>

            
           
          </div>
          <!-- /.box -->          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>



 <form enctype="multipart/form-data" action="{{url('services/add')}}" method="post" >
{{csrf_field()}}


 <table width="800" height="600" border="0" align="right">
  <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة خدمه جديده</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <td width="218"><input type="text" required name="name" value="" ></td>
    @if ($errors->has('name'))
           <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : اسم الخدمه </th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sub_name') ? ' has-error' : '' }}">
    <td width="218"><input type="text" required name="sub_name" value="" ></td>
    @if ($errors->has('sub_name'))
           <span class="help-block">
            <strong>{{ $errors->first('sub_name') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : الاسم الفرعي </th>
  </tr>
  <tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('image') ? 'has-error' : '' }}">
    <td width="218"><input type="file" required name="image" value="" ></td>
    @if ($errors->has('image'))
           <span class="help-block">
            <strong>{{ $errors->first('image') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : الصوره </th>
  </tr>
  <tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('foran_key') ? ' has-error' : '' }}">
    <td width="218"><select name="foran_key">
<option value="{{$servicesRequest->id=1}}">مواقع
<option value="{{$servicesRequest->id=2}}">تصميمات
<option value="{{$servicesRequest->id=3}}">تسويق
<option value="{{$servicesRequest->id=4}}">تطبيقات
</select></td>
    @if ($errors->has('foran_key'))
           <span class="help-block">
            <strong>{{ $errors->first('foran_key') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> :  صنف الخدمه</th>
  </tr>
  <tr>
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('detils') ? ' has-error' : '' }}">
    <td><textarea name="detils" class="textarea" required placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
    @if ($errors->has('detils'))
           <span class="help-block">
            <strong>{{ $errors->first('detils') }}</strong>
           </span>
        @endif
    </div>
    <th> : التفاصيل</th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('url_Title') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="url_Title" value="" required ></td>
    @if ($errors->has('url_Title'))
           <span class="help-block">
            <strong>{{ $errors->first('url_Title') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : URL عنوان المنتج  </th>
  </tr>

  <tr>
  
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