@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm sản phẩm</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                
                                <form role="form" active="{{route('admin.user.add')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên đăng nhập</label>
                                        <input type="text" name="username" class="form-control" value="{{old('username')}}"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('username')}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label>Họ tên</label>
                                        <input type="text" name="fullname" class="form-control" value="{{old('fullname')}}" />
                                        <p style="color: red; font-size: 14px">{{$errors->first('fullname')}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" />
                                        <p style="color: red; font-size: 14px">{{$errors->first('password')}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu</label>
                                        <input type="password" name="repassword" class="form-control" />
                                        <p style="color: red; font-size: 14px">{{$errors->first('repassword')}}</p>
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <!-- /.content-wrapper -->

@endsection