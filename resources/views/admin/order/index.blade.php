@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý đơn hàng</h1>
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
                                {{-- <a href="{{route('admin.order.add')}}" class="btn btn-success btn-md" style="margin: -5px 0 15px -6px;" >Thêm</a> --}}
                            </div>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Thời gian</th>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($arrOrders as $item)
                                    @php
                                        $urlShow = route('admin.order.show', ['id' => $item->order_id]);
                                        $urlDel = route('admin.order.del', ['id' => $item->order_id]);
                                    @endphp
                                        <tr class="gradeX">
                                            <td>{{$item->order_id}}</td>
                                            <td>{{$item->order_date}}</td>
                                            <td>{{$item->fullname}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td style="width: 33%">{{$item->address}}</td>
                                            
                                            <td class="center">
                                                <a href="{{$urlShow}}" class="btn btn-primary">Chi tiết</a>
                                                <a href="{{$urlDel}}" class="btn btn-danger"><i class="fas fa-pencil-alt"></i> Xóa</a>
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
                                            {{$arrOrders->links('vendor.pagination.bootstrap-4')}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
</div>

@endsection