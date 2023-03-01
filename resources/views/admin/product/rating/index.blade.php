@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý đánh giá</h1>
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
                  @if ($arrRatings->toArray() != null)
                    <a href="{{route('admin.product.picture.delAllPicture', ['id' => $arrProduct->product_id])}}" class="btn btn-danger btn-md" style="margin: -5px 0 15px 10px;" >Xoá tất cả</a>
                  @endif
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Người viết</th>
                      <th>Email</th>
                      <th>Đánh giá(sao)</th>
                      <th>Nội dung</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @if ($arrRatings->toArray() != null)
                      @foreach ($arrRatings as $rating)
                        @if ($rating->parent_id == 0)
                          @php
                            $urlDel = route('admin.product.rating.del', ['id' => $rating->rating_id]);
                          @endphp   
                          <tr style="background: rgba(0, 0, 0, 0.2);">
                            <td>{{$rating->rating_id}}</td>
                            <td>{{$rating->fullname}}</td>
                            <td>{{$rating->email}}</td>
                            <td>{{$rating->rating_action}}</td>
                            <td>{{$rating->comment}}</td>
                            <td>
                              <a href="{{$urlDel}}" title="" class="btn btn-danger"><i class="fa fa-pencil-alt"></i> Xóa</a>
                            </td>
                          </tr>
                          @foreach ($arrRatings as $item)
                          @if ($rating->rating_id == $item->parent_id)
                            @php
                              $urlDel = route('admin.product.rating.del', ['id' => $item->rating_id]);
                            @endphp
                            <tr>
                              <td>{{$item->rating_id}}</td>
                              <td>{{$item->fullname}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->rating_action}}</td>
                              <td>{{$item->comment}}</td>
                              <td>
                                <a href="{{$urlDel}}" title="" class="btn btn-danger"><i class="fa fa-pencil-alt"></i> Xóa</a>
                              </td>
                            </tr>
                          @endif
                          @endforeach
                        @endif
                      @endforeach
                    @else
                      <tr>
                        <td colspan="6" style="text-align: center"><b>Trống</b></td>
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