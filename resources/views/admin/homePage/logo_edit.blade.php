@extends('admin.layouts.layout')

 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        صفحة تغير المحتوي
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
              <h3 class="box-title"></h3>
            </div>

<div class="container pull-right" dir="rtl">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default 12" >
                <div class="panel-heading" dir="rtl">تعديل بيانات العميل</div>
                <div class="panel-body">
                   <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('headers',['headers'=> $headers->id]) }}" >
                        {{ csrf_field() }}
                         @if(count($errors)>0)
                           <div class="alert alert_danger">
                              <ul>
                            @foreach($errors->all() as $error )
                            <li> {{$error}}</li>
                              @endforeach
                               </ul>
                               </div>
                              @endif     

                        <div class="form-group  " dir="rtl">
                            <label for="name" class="col-md-4 control-label pull-right">: عنوان الموقع</label>
                            <div class="form-group{{ $errors->has('siteTitle') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required="" name="siteTitle" value="{{$headers->site_titles}}" >
                                @if ($errors->has('siteTitle'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('siteTitle') }}</strong>
                                    </span>
                                  @endif

                              </div>
                            </div>
                        </div>

                        


                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">: اللشعار</label>
                          <div class="form-group{{ $errors->has('change_img') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="text" type="file" class="form-control"  name="change_img" value="{{$headers->logo}}" >
                                @if ($errors->has('change_img'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('change_img') }}</strong>
                                    </span>
                                  @endif

                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    تعديل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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



@endsection
