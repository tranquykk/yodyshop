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
                                        <input type="text" name="name" value="{{$arrIntro->name}}" class="form-control"/>
                                    </div>
                                    <div class="form-group" >
                                        <label>Nội dung</label><br>
                                        <textarea name="content" id="" class="form-control" cols="30" rows="10">{{$arrIntro->content}}</textarea>
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