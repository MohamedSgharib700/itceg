@extends('admin.layouts.layout')

 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة التقارير
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
           
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  <th>العدد</th>
                  <th>العنوان الفرعي</th>
                  <th>العنوان</th>

                </tr>
                </thead>
                <tbody>
              @foreach($reports as $report )
                <tr>
                <td><a href="reports_change/{{$report->id}}/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="reports_edit/{{$report->id}}/edit" class="btn btn-success">تعديل</a></td>
                  <td>{{$report->number}}</td>
                  <td>{{$report->sub_text}}</td>
                  <td>{{$report->text}}</td>  
                </tr>
                @endforeach
             
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

      <form action="{{url('reports_show/add')}}" method="post" >
       {{csrf_field()}}

 
 <table width="800" height="600" border="0" align="right" >
 <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة تقرير جديد</h2>
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
    </div>
    <th width="119"> : العنوان الفرعي </th>
  </tr>


  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="number"  value="{{ old('number') }}" required ></td>
    @if ($errors->has('number'))
           <span class="help-block">
            <strong>{{ $errors->first('number') }}</strong>
           </span>
        @endif
    </div>
    </div>
    <th width="119"> : العدد </th>
  </tr>

  <tr>
    <td><input type="submit" name="_submit" value="  حفظ  "></td>
    <td>&nbsp;</td>
    
  </tr>
  </table>
 </form>
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




 
    <!-- /.content -->

 @endsection