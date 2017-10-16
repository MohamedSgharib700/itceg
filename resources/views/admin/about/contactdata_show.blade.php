@extends('admin.layouts.layout')

 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        (الصفحه الرئيسيه(تعريف الشركه
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
            <h3 class="box-title">{{$contact->title1}}</h3>
             <h5 class="box-title">{{$contact->content}}</h5>
              <table id="example2" class="table table-bordered table-hover pull-right">
                <thead>
                <tr>
                  <th>الحذف</th>
                  <th>التعديل</th>
                  <th>العنوان3</th>
                  <th>الايميل2</th>
                  <th>رقم المحمول2</th>
                  <th>العنوان1</th>
                  <th>اسم المدينه2</th>
                  <th>الايميل1</th>
                  <th>رقم المحمول1</th>
                  <th>العنوان1</th>
                  <th>اسم المدينه1</th>

                </tr>
                </thead>
                <tbody>
              
                <tr>
                <td><a href="contactdata_change/{{$contact->id}}/delete" class="btn btn-danger">حذف</a></td>
                  <td><a href="contactdata_edit/{{$contact->id}}/edit" class="btn btn-success">تعديل</a></td>
                  
                  <td>{{$contact->title4}}</td>
                  <td>{{$contact->email1}}</td>
                  <td>{{$contact->phone1}}</td>
                  <td>{{$contact->address1}}</td>
                  <td>{{$contact->title2 }}</td>
                  <td>{{$contact->email2}}</td>
                  <td>{{$contact->phone2}}</td>
                  <td>{{$contact->address2}}</td>
                  <td>{{$contact->title3}}</td>

                  
                </tr>
              
               
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


 <form action="{{url('contactdata/add')}}" method="post" >
{{csrf_field()}}

 
 <table width="800" height="600" border="0" align="right" >
 <div class="pull-right" >

   <tr >
    <th align="pull-right" colspan="3" scope="row"><h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;اضافة بيانات اتصال جديده</h2>
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
    <th width="119"> : العنوان الرئيسي</th>
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
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sity1') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="sity1" value="{{ old('sity1') }}" required autofocus ></td>
    @if ($errors->has('sity1'))
           <span class="help-block">
            <strong>{{ $errors->first('sity1') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 1 المدينه </th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="address1"  value="{{ old('address1') }}" required ></td>
    @if ($errors->has('address1'))
           <span class="help-block">
            <strong>{{ $errors->first('address1') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : 1 العنوان </th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('phone1') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="phone1" value="{{ old('phone1') }}" required autofocus ></td>
    @if ($errors->has('phone1'))
           <span class="help-block">
            <strong>{{ $errors->first('phone1') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 1 رقم المحمول</th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('email1') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="email1" value="{{ old('email1') }}" required autofocus ></td>
    @if ($errors->has('email1'))
           <span class="help-block">
            <strong>{{ $errors->first('email1') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 1 الايميل</th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('url1') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="url1" value="{{ old('url1') }}" required autofocus ></td>
    @if ($errors->has('url1'))
           <span class="help-block">
            <strong>{{ $errors->first('url1') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 1 توجه اللينك</th>
  </tr>


  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('sity2') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="sity2" value="{{ old('sity2') }}" required autofocus ></td>
    @if ($errors->has('sity2'))
           <span class="help-block">
            <strong>{{ $errors->first('sity2') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 2 المدينه </th>
  </tr>
  
   <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="address2"  value="{{ old('address2') }}" required ></td>
    @if ($errors->has('address2'))
           <span class="help-block">
            <strong>{{ $errors->first('address2') }}</strong>
           </span>
        @endif
    </div>
    <th width="119"> : 2 العنوان </th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('phone2') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="phone2" value="{{ old('phone2') }}" required autofocus ></td>
    @if ($errors->has('phone2'))
           <span class="help-block">
            <strong>{{ $errors->first('phone2') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 2 رقم المحمول</th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('email2') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="email2" value="{{ old('email2') }}" required autofocus ></td>
    @if ($errors->has('email2'))
           <span class="help-block">
            <strong>{{ $errors->first('email2') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 2 الايميل</th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('url2') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="url2" value="{{ old('url2') }}" required autofocus ></td>
    @if ($errors->has('url2'))
           <span class="help-block">
            <strong>{{ $errors->first('url2') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 2 توجه اللينك</th>
  </tr>

  <tr>
    <th width="154" height="44" scope="row">&nbsp;</th>
    <div class="form-group{{ $errors->has('title3') ? ' has-error' : '' }}">
      <div class="col-md-6">
    <td width="218"><input type="text" name="title3" value="{{ old('title3') }}" required autofocus ></td>
    @if ($errors->has('title3'))
           <span class="help-block">
            <strong>{{ $errors->first('title3') }}</strong>
           </span>
        @endif
    </div>
  </div>
    <th width="119"> : 3 العنوان</th>
  </tr>

  


  <tr>
    <td><input type="submit" name="_submit" value="  حفظ  "></td>
    <td>&nbsp;</td>
    
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




 
    <!-- /.content -->

 @endsection