@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa danh mục</h1>
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
                                <form role="form" active="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input type="text" name="name" value="{{$arrProduct->name}}" class="form-control"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('name')}}</p>
                                    </div>
                                    @if ($arrPicture->picture != '')
                                        <div class="form-group">
                                            <label>Hình ảnh cũ</label>
                                            <br>
                                            <img src="storage/templates/yody/images/{{$arrPicture->picture}}" alt="" width="150px">
                                        </div>
                                    @endif
                                    <div class="form-group" >
                                        <label>Hình ảnh</label><br>
                                        <input type="hidden" name="picture" value="{{$arrPicture->picture}}"/>
                                        <input type="file" name="new_picture" class="form-control" style="height: auto;"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('picture')}}</p>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success btn-md" style="margin-top:10px; padding: 5px 15px">Sửa</button>
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