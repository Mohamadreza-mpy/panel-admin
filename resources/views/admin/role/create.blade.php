@extends('layouts.admin.master')

@section('content')
    <form action="{{url('admin/role/store')}}" method="POST">
        @csrf
        <div class="flex-column flex-row-fluid" id="kt_app_wrapper">
            <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>عنوان:</label>
                            <input class="form-control" type="text" id="name" name="title" value="@if(isset($data->name)) {{$data->name}} @endif" placeholder="عنوان  را وارد کنید . . .">
                        </div>

                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <div class="row">
                        <?php
                        if (isset($data->permission)) {
                            $accessDB = unserialize($data->permission) ? unserialize($data->permission) : [];
                        } else {
                            $accessDB = [];
                        }
                        ?>
                        @foreach(Config::get('site.permisions') as $key=>$value)
                            @if($key !== "dashboard")
                                <div class="widget col-md-4 p-2 card card-flush h-md-50 mb-5 mb-xl-10">
                                    <div class="card bg-light rounded-lg p-3 h-100 border-0">
                                        <div class="widget-header bordered-bottom bordered-themesecondary">
                                            <i class="widget-icon fa fa-unlock-alt themesecondary"></i>
                                            <span class="widget-caption themesecondary" style="color: #3c8dbc;">{{{ $value['title'] }}}</span>
                                        </div>
                                        <!--Widget Header-->
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <div class="tickets-container" style="height: 150px;">
                                                    @foreach($value['access'] as $keyAccess => $access)

                                                        <div class="col-md-6 m-2">
                                                            @php $permission = 'admin.'.$key.'.'.$keyAccess; @endphp

                                                            <input class="form-check-input" type="checkbox" name="access[]" value="{{$permission}}" @if(isset($data) && in_array($permission,$accessDB)) checked @endif>
                                                            <span class="text">{{{ $access }}}</span>
                                                        </div>
                                                    @endforeach
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="widget col-md-4 p-2">
                                    <div class="card bg-light rounded-lg p-3 h-100 border-0">
                                        <div class="widget col-md-12" style="background-color: rgb(248, 248, 248); border: medium solid;">
                                            <div class="widget-header bordered-bottom bordered-themesecondary">
                                                <i class="widget-icon fa fa-unlock-alt themesecondary"></i>
                                                <span class="widget-caption themesecondary" style="color: #3c8dbc;">{{{ $value['title'] }}}</span>
                                            </div>
                                            @php $permission = 'admin.dashboard'; @endphp
                                            <input type="checkbox" name="access[]" value="{{$permission}}" @if(isset($data) && in_array($permission,$accessDB)) checked @endif>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>



                <div class="d-grid gap-2 text-center">
                    <button type="submit" class="btn btn-success px-5  mt-2">ثبت</button>
                </div>
            </div>
        </div>
    </form>
@stop
