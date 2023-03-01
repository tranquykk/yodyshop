@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý nhóm mặt hàng</h1>
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
                  <a href="{{route('admin.group.add')}}" class="btn btn-success btn-md" style="margin: -5px 0 15px -6px;" >Thêm</a>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên mặt hàng</th>
                      <th width="85px">Hiển thị</th>
                      <th>Hình ảnh</th>
                      <th>Icon</th>
                      <th>Thuộc mặt hàng</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($arrGroups as $item)
                    @php
                      $urlEdit = route('admin.group.edit', ['id' => $item->classify_group_id]);
                      $urlDel = route('admin.group.del', ['id' => $item->classify_group_id]);
                      $picUrl = 'storage/templates/yody/images/'.$item->picture;
                      $iconUrl = 'storage/templates/yody/images/'.$item->icon;
                    @endphp    
                    <tr>
                      <td>{{$item->classify_group_id}}</td>
                      <td>{{$item->name}}</td>
                      <td>
                        @if ($item->active == 0)
                          <input type="checkbox" name="active" value="0">
                        @else
                          <input type="checkbox" name="active" value="1" checked>
                        @endif
                      </td>
                      <td style="text-align: center">
                        @if ($item->picture != '')
                          <img src="{{$picUrl}}" alt="" height="80px" />
                        @else
                          <strong>Không có hình</strong>
                        @endif
                      </td>
                      <td style="text-align: center">
                        @if ($item->icon != '')
                          <img src="{{$iconUrl}}" alt="" height="80px" />
                        @else
                          <strong>Không có hình</strong>
                        @endif
                      </td>
                      <td>{{$item->cname}}</td>
                      <td>
                        <a href="{{$urlEdit}}" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                        <a href="{{$urlDel}}" title="" class="btn btn-danger"><i class="fa fa-pencil-alt"></i> Xóa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_info" id="dataTables-example_info" style="margin:17px 0 0 5px">Tổng số danh mục: </div>
                  </div>
                  <div class="col-sm-6" >
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate" style="float: right;">
                      @if (!isset($searchBlogs))
                        {{$arrGroups->links('vendor.pagination.bootstrap-4')}}
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