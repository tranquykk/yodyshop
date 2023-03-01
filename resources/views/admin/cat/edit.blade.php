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
                                        <input type="text" name="name" value="{{$arrCat->name}}" class="form-control"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('name')}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên phụ</label>
                                        <input type="text" name="sub_name" value="{{$arrCat->sub_name}}" class="form-control"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('sub_name')}}</p>
                                    </div>
                                    @if ($arrCat->picture != '')
                                        <div class="form-group">
                                            <label>Hình ảnh cũ</label>
                                            <br>
                                            <img src="storage/templates/yody/images/{{$arrCat->picture}}" alt="" height="100px">
                                        </div>
                                    @endif
                                    <div class="form-group" >
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" class="form-control" style="height: auto;"/>
                                    </div>
                                    @if ($arrCat->picture_menu != '')
                                        <div class="form-group">
                                            <label>Hình menu cũ</label>
                                            <br>
                                            <img src="storage/templates/yody/images/{{$arrCat->picture_menu}}" alt="" height="100px">
                                        </div>
                                    @endif
                                    <div class="form-group" >
                                        <label>Hình menu</label><br>
                                        <input type="file" name="picture_menu" class="form-control" style="height: auto;"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Thuộc danh mục</label>
                                        <select class="form-control" name="parent_id">
                                            <option value="0">PARENT</option>
                                            @php
                                                showCategories($arrCats, $arrCat);
                                            @endphp
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label>Hiển thị trên thanh menu</label><br>
                                        <select class="form-control" name="active">
                                            <option value="0" {{($arrCat->active == 0)?'selected':''}}>Tắt</option>
                                            <option value="1" {{($arrCat->active == 1)?'selected':''}}>Hiển thị</option>
                                        </select>
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

@php
// dd($arrCat->parent_id);
    function showCategories($categories, $arrCat, $parent_id = 0, $char = '') {
        // global $arrCat;

        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item['parent_id'] == $parent_id) {
                $selected = '';
                if($arrCat['parent_id'] == $item->cat_id) {
                    $selected = 'selected=selected';
                }
                echo '<option value="'.$item->cat_id.'" '.$selected.' >'.$char.$item->name.'</option>';
                
                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $arrCat, $item->cat_id, $char.'➤ ');
            }
        }
    }
@endphp