@extends('admin.layouts.layout')

 @section('content')
 <div class="content-wrapper">
    
    <section class="content-header">
      <h1 align="center">
        صفحة محتوي الفوتر
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الملف الشخصي</a></li>
      </ol>
    </section>

    
   
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
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  
                  <th>التعديل</th>
                  <th>رقم الاتصال</th>
                  <th>الشعار</th>
                  <th>url لنكيد ان</th>
                  <th>url تويتر</th>
                  <th>url الفيس</th>
                  <th>url اللينك</th>
                  <th>عنوان اللينك</th>

                </tr>
                </thead>
                <tbody>
             
                <tr>
                 
                  <td><a href="footer_edit/{{$footer->id}}/edit" class="btn btn-success">تعديل</a></td>
                  <td>{{$footer->Connection }}</td> 
                  <td width="180"><img width="100" height="60" src="{{asset('logo_footer/'.$footer->logo)}} "></td>
                  <td>{{$footer->url_linkedin }}</td>
                  <td>{{$footer->url_twitter}}</td>
                  <td>{{$footer->url_face}}</td>
                  <td>{{$footer->link_url }}</td>
                  <td>{{$footer->link_name}}</td>
                  
                </tr>
          
               
                </tbody>>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>

 
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




 
    <!-- /.content -->

 @endsection