@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý bình luận, đánh giá</h1>
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
                @if (session('msg'))
                  <p style="color: green; margin:0">{{session('msg')}}</p>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên khách hàng</th>
                      <th>Email</th>
                      <th>Số điện thoại</th>
                      <th style="width: 90px">Đánh giá (sao)</th>
                      <th>Bình luận</th>
                      <th>Tên sản phẩm</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($objRatings as $item)
                    @php
                      $urlDel = route('admin.rating.del', ['id' => $item->rating_id]);
                    @endphp    
                    <tr>
                      <td>{{$item->rating_id}}</td>
                      <td>{{$item->fullname}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                      <td>{{$item->rating_action}} sao</td>
                      <td>{{$item->comment}}</td>
                      <td>{{$item->pname}}</td>
                      <td>
                        <a href="{{$urlDel}}" title="" class="btn btn-danger"><i class="fa fa-pencil-alt"></i> Xóa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_info" id="dataTables-example_info" style="margin:27px 0 0 5px">Tổng số danh mục: </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate" style="float: right;">
                      @if (!isset($searchBlogs))
                        {{$objRatings->links('vendor.pagination.bootstrap-4')}}
                      @endif
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