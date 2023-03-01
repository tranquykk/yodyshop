@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý người dùng</h1>
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
                                <a href="{{route('admin.user.add')}}" class="btn btn-success btn-md" style="margin: -5px 0 15px -6px;" >Thêm</a>
                            </div>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="4" style="text-align: center;background-color: rgba(0,0,0,.075);font-size: 18px;">Máy chủ</th>
                                    </tr>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên đăng nhập</th>
                                        <th>Họ tên</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($objUsers as $item)
                                    @php
                                        $urlEdit = route('admin.user.edit', ['id' => $item->user_id]);
                                        $urlDel = route('admin.user.del', ['id' => $item->user_id]);
                                    @endphp
                                        <tr class="gradeX">
                                            <td>{{$item->user_id}}</td>
                                            <td>{{$item->username}}</td>
                                            <td>{{$item->fullname}}</td>
                                            <td class="center">
                                                @if (Auth::user()->username == 'admin' || $item->username != 'admin')
                                                    <a href="{{$urlEdit}}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                                @endif
                                                @if ($item->username != 'admin')
                                                    <a href="{{$urlDel}}" title="" class="btn btn-danger"><i class="fa fa-pencil-alt"></i> Xóa</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if (count($objMembers)>0)
                                        <tr>
                                            <th colspan="4" style="text-align: center;background-color: rgba(0,0,0,.075);font-size: 18px;">Máy khách</th>
                                        </tr>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Họ tên</th>
                                            <th>Chức năng</th>
                                        </tr>
                                        @foreach ($objMembers as $item)
                                            @php
                                                $urlEdit = route('admin.user.edit', ['id' => $item->user_id]);
                                                $urlDel = route('admin.user.del', ['id' => $item->user_id]);
                                            @endphp
                                            <tr class="gradeX">
                                                <td>{{$item->user_id}}</td>
                                                <td>{{$item->username}}</td>
                                                <td>{{$item->fullname}}</td>
                                                <td class="center">
                                                    <a href="{{$urlDel}}" title="" class="btn btn-danger"><i class="fa fa-pencil-alt"></i> Xóa</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    
                                </tbody>
                            </table>
                            {{-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_info" id="dataTables-example_info" style="margin:17px 0 0 5px">Tổng số danh mục: </div>
                                </div>
                                <div class="col-sm-6" >
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate" style="float: right;">
                                        @if (!isset($searchBlogs))
                                        {{$objUsers->links('vendor.pagination.bootstrap-4')}}
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
</div>

@endsection