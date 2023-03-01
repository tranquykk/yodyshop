@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm nhóm mặt hàng</h1>
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
                                
                                <form role="form" active="{{route('admin.classify.add')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên nhóm mặt hàng</label>
                                        <input type="text" name="name" class="form-control"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('name')}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên phụ</label>
                                        <input type="text" name="sub_name" class="form-control"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('sub_name')}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Mặt hàng</label>
                                        <select class="form-control" name="classify_id">
                                            @foreach ($arrClassifys as $item)
                                            <option value="{{$item->classify_id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" class="form-control" style="height: auto;"/>
                                    </div>
                                    <div class="form-group" >
                                        <label>Hiển thị</label><br>
                                        <select class="form-control" name="active">
                                            <option value="0">Tắt</option>
                                            <option value="1">Bật</option>
                                        </select>
                                    </div>
                                    <br>
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