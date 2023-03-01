@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Hình ảnh</h1>
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
              <div class="card-header">
                <h5>
                  Sản phẩm {{$arrProduct->name}}
                </h5>
                @if (session('msg'))
                  <p style="color: green; margin:0">{{session('msg')}}</p>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                  <a href="{{route('admin.product.picture.add', ['id' => $arrProduct->product_id])}}" class="btn btn-success btn-md" style="margin: -5px 0 15px -6px;" >Thêm</a>
                  @if ($arrPictures->toArray() != null)
                    <a href="{{route('admin.product.picture.delAllPicture', ['id' => $arrProduct->product_id])}}" class="btn btn-danger btn-md" style="margin: -5px 0 15px 10px;" >Xoá tất cả</a>
                  @endif
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Hình ảnh</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @if ($arrPictures->toArray() != null)
                      @foreach ($arrPictures as $item)
                      @php
                        $urlEdit = route('admin.product.picture.edit', ['id' => $item->picture_id]);
                        $urlDel = route('admin.product.picture.del', ['id' => $item->picture_id]);
                        $picUrl = 'storage/templates/yody/images/'.$item->picture;
                      @endphp    
                      <tr>
                        <td>{{$item->picture_id}}</td>
                        <td style="text-align: center">
                          <img src="{{$picUrl}}" alt="" height="110px" />
                        </td>
                        <td>
                          <a href="{{$urlEdit}}" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                          <a href="{{$urlDel}}" title="" class="btn btn-danger"><i class="fa fa-pencil-alt"></i> Xóa</a>
                        </td>
                      </tr>
                      @endforeach
                    @else
                      <tr>
                        <td colspan="3" style="text-align: center"><b>Trống</b></td>
                      </tr>
                    @endif
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-sm-6" style="text-align:right;padding-left: 400px">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                      <ul class="pagination">
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

@endsection