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
            
            <h3 class="box-title">المشرفين الحالين</h3>
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                <th>حساب المشرف</th>
                  <th>اسم المشرف</th>
                  <th>التعديل</th>
                  <th>الحذف</th>
                  

                </tr>
                </thead>
                <tbody>
              @foreach($shows as $show)
               <tr>

               <td> {{$show->email}}</td>
                  <td>{{$show->name}}</td>
                    @if(Auth::user()->role === 1)
                <td><a href="edit/{{$show->id}}/edit" class="btn btn-success">تعديل</a></td>
                   @endif

                    @if(Auth::user()->role === 1 && $show->id !== 8)
                <td><a href="users_show/{{ $show->id }}/delete" class="btn btn-danger">حذف</a></td>
                   @endif

                  @if(Auth::user()->role === 0 &&Auth::user()->id === $show->id)
                  <td><a href="users_show/{{ $show->id }}/delete" class="btn btn-danger">حذف</a></td>
                <td><a href="edit/{user}/edit" class="btn btn-success">تعديل</a></td>
                   @endif

                  
                  
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
    </section>

    <div class="box-body" align="center">
              <tr align="center">
              <td><a type="button" class="btn btn-success " href="{{url('register')}}"></td>
                إضافة مشرف جديد
              </a>
              </tr>
            </div>

            <table width="800" height="600" border="0" align="right" >
 <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h2>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></th>
      
    </tr>
  </div>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"></td>
    @if ($errors->has('name'))
           <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
           </span>
        @endif
    </div>
  </div>
    
  
  </table>

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






@endsection