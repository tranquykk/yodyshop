@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @isset($_GET['key'])
              <h1>Tìm kiếm sản phẩm</h1>
            @else
              <h1>Quản lý sản phẩm</h1>
            @endisset
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
                <div class="col-sm-6" style="float: left; max-width: 20%">
                  <a href="{{route('admin.product.add')}}" class="btn btn-success btn-md" style="margin: -5px 0 15px -6px;" >Thêm</a>
                </div>
                <div class="col-sm-6" style="float: right; display: flex; justify-content: space-around; max-width: 60%;">
                  <form role="search" method="post" action="" style="display: flex; width: 240px">
                    @csrf
                    <label for="" style="margin: auto">Sắp xếp theo: </label>
                    <select name="sort" id="sort" class="form-control input-sm" style="width: 130px;font-size: 14px;height: 33px;">
                      <option value="">--Lọc--</option>
                      <option value="{{Request::url()}}?order_by=asc" {{isset($_GET['order_by']) && $_GET['order_by'] == 'asc' ? 'selected' : ''}} >Giá tăng dần</option>
                      <option value="{{Request::url()}}?order_by=desc" {{isset($_GET['order_by']) && $_GET['order_by'] == 'desc' ? 'selected' : ''}}>Giá giảm dần</option>
                      <option value="{{Request::url()}}?order_by=a-z" {{isset($_GET['order_by']) && $_GET['order_by'] == 'a-z' ? 'selected' : ''}}>A đến Z</option>
                      <option value="{{Request::url()}}?order_by=z-a" {{isset($_GET['order_by']) && $_GET['order_by'] == 'z-a' ? 'selected' : ''}}>Z đến A</option>
                    </select>
                  </form>
                  <form role="search" method="get" action="{{route('admin.product.search')}}" style="margin-right: -100px;">
                    <input type="submit" value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right" />
                    <input type="search" class="form-control input-sm"  name="key" required minlength="5" placeholder="Nhập tên hoặc giá sản phẩm" style="float:right; width: 200px;font-size: 14px;height: 33px;" />
                    <div style="clear:both"></div>
                  </form>
                  <br />
                  <br>
                </div>
                <div class="clear"></div>
                <div>
                  
                </div>
                @isset($_GET['key'])
                  <div style="margin: 50px 0 10px 0; text-align: right; font-weight: 600;"> Tìm thấy: {{count($arrProducts)}} sản phẩm</div>
                @endisset
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên sản phẩm</th>
                      <th>Giá</th>
                      <th>Giảm giá(%)</th>
                      <th>Hình ảnh</th>
                      <th>Danh mục</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($arrProducts as $item)
                    @php
                      $urlEdit = route('admin.product.edit', ['id' => $item->product_id]);
                      $urlDel = route('admin.product.del', ['id' => $item->product_id]);
                      $urlPicture = route('admin.product.picture.index', ['id' => $item->product_id]);
                      $urlRating = route('admin.product.rating.index', ['id' => $item->product_id]);
                      $picUrl = 'storage/templates/yody/images/'.$item->picture;
                    @endphp    
                    <tr>
                      <td>{{$item->product_id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{number_format($item->price, 0, ',', '.')}}VNĐ</td>
                      <td>{{$item->sale_off}}%</td>
                      <td style="text-align: center">
                        @if ($item->picture != '')
                          <img src="{{$picUrl}}" alt="" height="80px" />
                        @else
                          <strong>Không có hình</strong>
                        @endif
                      </td>
                      <td>{{$item->cname}}</td>
                      <td>
                        <a href="{{$urlEdit}}" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                        <a href="{{$urlDel}}" title="" class="btn btn-danger"><i class="fa fa-pencil-alt"></i> Xóa</a>
                        <br>
                        <a href="{{$urlPicture}}" title="" class="btn btn-success" style="margin-top: 3px">Hình ảnh</a>
                        <a href="{{$urlRating}}" title="" class="btn btn-info" style="margin-top: 3px">Đánh giá</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="row" style="float: right;">
                  <div class="col-sm-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate" >
                      @if ((request()->routeIs('admin.product.index')))
                        {{$arrProducts->links('vendor.pagination.bootstrap-4')}}
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

@endsection
