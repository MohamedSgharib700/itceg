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
              <h3 class="box-title"></h3>
            </div>

<div class="container pull-right" dir="rtl">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default 12" >
                <div class="panel-heading" dir="rtl">تعديل بيانات الخدمه</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype= multipart/form-data method="POST" action="{{route('servicesRequest',['servicesRequest'=> $servicesRequest->id]) }}" >
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
                            <label for="name" class="col-md-4 control-label pull-right">اسم الخدمه</label>
                           <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required name="name" value="{{$servicesRequest->title}}" >
                                @if ($errors->has('sup_title'))
                                  <span class="help-block">
                                   <strong>{{ $errors->first('sup_title') }}</strong>
                                   </span>
                                  @endif
                               </div>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">الاسم الفرعي</label>
                            <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" required="" name="sub_name" value="{{$servicesRequest->sub_title}}" >
                                @if ($errors->has('sup_title'))
                                  <span class="help-block">
                                   <strong>{{ $errors->first('sup_title') }}</strong>
                                   </span>
                                  @endif
                               </div>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">الصوره</label>
                              <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="text" type="file" class="form-control"  name="image" value="{{ old('image') }}" >
                                @if ($errors->has('sup_title'))
                                  <span class="help-block">
                                   <strong>{{ $errors->first('sup_title') }}</strong>
                                   </span>
                                  @endif
                               </div>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">رقم الترميز</label>
                           <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <select name="foran_key">
                                  <option value="{{$servicesRequest->id=1}}">مواقع
                                  <option value="{{$servicesRequest->id=2}}">تصميمات
                                  <option value="{{$servicesRequest->id=3}}">تسويق
                                  <option value="{{$servicesRequest->id=4}}">تطبيقات
                                  </select>
                                @if ($errors->has('sup_title'))
                              <span class="help-block">
                             <strong>{{ $errors->first('sup_title') }}</strong>
                              </span>
                             @endif

                                
                            </div>
                        </div>
                        </div>


                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label pull-right">التفاصيل</label>
                            <div class="form-group{{ $errors->has('sup_title') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <textarea class="textarea " name="detils" required placeholder="Place some text here" style="width: 100%; height: 200px; font-size:    14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$servicesRequest->detils}}</textarea>
                                @if ($errors->has('sup_title'))
                                  <span class="help-block">
                                   <strong>{{ $errors->first('sup_title') }}</strong>
                                   </span>
                                  @endif
                               </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label pull-right">URL عنوان المنتج</label>
                             <div class="form-group{{ $errors->has('urlTitle') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" required name="urlTitle" value="{{$servicesRequest->urlTitle}}" >
                                @if ($errors->has('urlTitle'))
                              <span class="help-block">
                             <strong>{{ $errors->first('urlTitle') }}</strong>
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