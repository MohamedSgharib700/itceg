@extends('admin.layouts.layout')

 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة شرائح الباقات
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
            <div class="box-body">
              
                <div>
    @foreach($sliders as $slider)

  <div class="col-sm-2 col-md-4 pull-right"  >
    <div class="">
     <td> <img width="200" height="60" src="{{asset('sliders/'.$slider->slider_name)}}" > </td>
      <div class="caption">
        <th></th>
        <p><a href="packages_change/{{$slider->id}}/delete" class="btn btn-danger pull-right">حذف</a></p>
      </div>
    </div>
  </div>
 
 @endforeach
<form enctype="multipart/form-data" action="{{url('packages_change')}}" method="post" >
{{csrf_field()}}
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

 <table width="505" height="297" border="0" align="right">
 <div></div>
  <tr>
    
    <td> </td>
    <td width="218"></td>
   
  </tr>
  </div>
  
    <th height="42" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
    <td><input type="file" name="slider_change" max="30000" required value="" /></td>
    @if ($errors->has('sup_title'))
           <span class="help-block">
            <strong>{{ $errors->first('sup_title') }}</strong>
           </span>
        @endif
    <th> : اختر الصوره</th>
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
@endsection