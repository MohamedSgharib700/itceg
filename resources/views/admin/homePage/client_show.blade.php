@extends('admin.layouts.layout')

 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة عرض العملاء
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
            <h3 class="box-title">{{$title->title}}</h3>
            <h5 class="box-title">{{$title->sub_title}}</h5>
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  <th>التفاصيل</th>
                  <th>اسم الشركه</th>
                  <th>صورته</th>
                  <th>اسم العميل</th>


                </tr>
                </thead>
                <tbody>
              @foreach($clients as $client)
                <tr>
                <td><a href="client_change/{{$client->id}}/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="client_edit/{{$client->id}}/edit" class="btn btn-success">تعديل</a></td>
                  <td>{!! $client->content1 !!}</td>
                  <td>{{$client->company_name1}}</td>
                  <td><img width="80" height="60" src="{{asset('clientAdd/'.$client->image)}}"></td>
                  <td>{{$client->client1}}</td>
                  
                </tr>
              @endforeach
               
                </tfoot>
              </table>
            </div>
<form action="{{url('client_show/add')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

 <table width="800" height="600" border="0" align="right">
  <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة عميل جديد</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="name" value="" required autofocus></td>
    @if ($errors->has('name'))
           <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : اسم العميل </th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    <td width="218"><input type="file" name="image" value="" required ></td>
    @if ($errors->has('image'))
           <span class="help-block">
            <strong>{{ $errors->first('image') }}</strong>
           </span>
        @endif
    <th width="119"> : الصوره </th>
  </tr>
  <tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
    <td width="218"><input type="text" name="company_name" value="" required ></td>
    @if ($errors->has('company_name'))
           <span class="help-block">
            <strong>{{ $errors->first('company_name') }}</strong>
           </span>
        @endif
    <th width="119"> : اسم الشركه </th>
  </tr>
  <tr>
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('detils') ? ' has-error' : '' }}">
    <td><textarea name="detils" class="textarea" placeholder="Place some text here" required  style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
     @if ($errors->has('detils'))
           <span class="help-block">
            <strong>{{ $errors->first('detils') }}</strong>
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
            
           <form action="{{url('clients_show/add')}}" method="post" >
{{csrf_field()}}

 
 <table width="800" height="600" border="0" align="right" >
 <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة عنوان جديد</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;____________________________________________</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="title" value="{{ old('title') }}" required autofocus ></td>
    @if ($errors->has('title'))
           <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : العنوان</th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sub_title') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="sub_title"  value="{{ old('sub_title') }}" required ></td>
    @if ($errors->has('sub_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sub_title') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : العنوان الفرعي </th>
  </tr>

  <tr>
    <td><input type="submit" name="_submit" value="  حفظ  "></td>
    <td>&nbsp;</td>
    
  </tr>
  </table>
 </form>


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