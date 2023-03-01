@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa nhóm mặc hàng</h1>
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
                                        <label>Tên nhóm mặt hàng</label>
                                        <input type="text" name="name" value="{{$arrProduct->name}}" class="form-control"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('name')}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="number" name="price" class="form-control" value="{{$arrProduct->price}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Giảm giá(%)</label>
                                        <input type="number" name="sale_off" class="form-control" value="{{$arrProduct->sale_off}}"/>
                                    </div>
                                        <div class="form-group">
                                        <label>Danh mục</label>
                                        <select class="form-control" name="cat_id">
                                            <option value="0">PARENT</option>
                                            @php
                                                showCategories($arrCats, $arrProduct);
                                            @endphp
                                        </select>
                                    </div>
                                    @if ($arrProduct->picture != '')
                                        <div class="form-group">
                                            <label>Hình ảnh cũ</label>
                                            <br>
                                            <img src="storage/templates/yody/images/{{$arrProduct->picture}}" alt="" width="150px">
                                        </div>
                                        <br>
                                    @endif
                                    <div class="form-group" >
                                        <label>Hình ảnh</label><br>
                                        <input type="hidden" name="picture" value="{{$arrProduct->picture}}"/>
                                        <input type="file" name="new_picture" class="form-control" style="height: auto;"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('picture')}}</p>
                                    </div>
                                    <div class="form-group" >
                                        <label>Chi tiết sản phẩm</label><br>
                                        <textarea name="product_detail" id="" class="form-control" width="100%" rows="5">{{$arrProduct->product_detail}}</textarea>
                                        <p style="color: red; font-size: 14px">{{$errors->first('product_detail')}}</p>
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
    function showCategories($categories, $arrProduct, $parent_id = 0, $char = '') {

        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item['parent_id'] == $parent_id) {
                $selected = '';
                if($arrProduct['cat_id'] == $item->cat_id) {
                    $selected = 'selected=selected';
                }
                echo '<option value="'.$item->cat_id.'" '.$selected.' >'.$char.$item->name.'</option>';
                
                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $arrProduct, $item->cat_id, $char.'➤ ');
            }
        }
    }
@endphp