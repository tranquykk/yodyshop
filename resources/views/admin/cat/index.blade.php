@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Danh mục</h1>
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
                  <a href="{{route('admin.cat.add')}}" class="btn btn-success btn-md" style="margin: -5px 0 15px -6px;" >Thêm</a>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên danh mục</th>
                      <th>Hình ảnh</th>
                      <th>Ảnh menu</th>
                      <th>Hiển thị menu</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>

                  <tbody>
                  @php
                    TableCategories($arrCats);
                  @endphp
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_info" id="dataTables-example_info" style="margin:27px 0 0 5px">Tổng số danh mục: </div>
                  </div>
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

@php
  function TableCategories($categories, $parent_id = 0, $char = '')
  {
    foreach ($categories as $key => $item)
    {
      // Nếu là chuyên mục con thì hiển thị
      if ($item['parent_id'] == $parent_id) {
        $color = '';
        if($item['parent_id'] == 0) {
          $color = 'style="background: rgba(0, 0, 0, 0.2)"';
        }
        echo '<tr '.$color.'>';
          echo '<td>'.$item->cat_id.'</td>';
          if ($item['parent_id'] > 4) {
            echo '<td> ➤ '.ucwords($item->name).'</td>';
          } else {
            echo '<td>'.ucwords($item->name).'</td>';
          }
          echo '<td style="text-align: center">';
            if ($item->picture != '') {
              echo '<img src="storage/templates/yody/images/'.$item->picture.'" alt="" height="90px" />';
            } else {
              echo '<strong>Trống</strong>';
            }
          echo '</td>';
          echo '<td style="text-align: center">';
            if ($item->picture_menu != '') {
              echo '<img src="storage/templates/yody/images/'.$item->picture_menu.'" alt="" height="90px" />';
            } else {
              echo '<strong>Trống</strong>';
            }
          echo '</td>';
          echo '<td style="text-align: center">';
            if ($item->active == 0) {
              echo '<input type="checkbox" name="active" value="0">';
            } else {
              echo '<input type="checkbox" name="active" value="1" checked>';
            }
          echo '</td>';
          echo '<td>
            <a href="'.route('admin.cat.edit', ['id' => $item->cat_id]).'" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
          </td>';
        echo '</tr>';
        
        // Xóa chuyên mục đã lặp
        unset($categories[$key]);
        
        // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
        TableCategories($categories, $item->cat_id, $char.'');
      }
    }
  }
@endphp
