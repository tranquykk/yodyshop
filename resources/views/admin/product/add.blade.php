@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm sản phẩm</h1>
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
                                
                                <form role="form" active="{{route('admin.product.add')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control"/>
                                        <p style="color: red; font-size: 14px">{{$errors->first('name')}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="number" name="price" class="form-control" value="0"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Giảm giá(%)</label>
                                        <input type="number" name="sale_off" class="form-control" value="0"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Thuộc danh mục</label>
                                        <select class="form-control" name="cat_id">
                                            <option value="0">PARENT</option>
                                            @php
                                                showCategories($arrCats);
                                            @endphp
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" class="form-control" style="height: auto;"/>
                                        <p style="color: red; font-size: 14px"> {{$errors->first('picture')}}</p>
                                    </div>
                                    <div class="form-group" >
                                        <label>Chi tiết sản phẩm</label><br>
                                        <textarea name="product_detail" id="" class="form-control" width="100%" rows="5"></textarea>
                                        <p style="color: red; font-size: 14px">{{$errors->first('product_detail')}}</p>
                                    </div>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
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
    function showCategories($categories, $parent_id = 0, $char = '') {

        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item['parent_id'] == $parent_id) {
                echo '<option value="'.$item->cat_id.'" >'.$char.$item->name.'</option>';
                
                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $item->cat_id, $char.'➤ ');
            }
        }
    }
@endphp