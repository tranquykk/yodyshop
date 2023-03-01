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
                                <table id="example2" class="table table-bordered table-hover">
                                    <tr>
                                        <th colspan="3" style="text-align: center; background: #ececec; font-size: 18px">Thông tin khách hàng</th>
                                    </tr>
                                    @foreach ($arrOrder as $item)
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <td colspan="2">{{$item->order_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Thời gian đặt hàng</th>
                                        <td colspan="2">{{$item->order_date}}</td>
                                    </tr>

                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <td colspan="2">{{$item->fullname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Số điện thoại liên lạc</th>
                                        <td colspan="2">{{$item->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Địa chỉ</th>
                                        <td colspan="2">{{$item->address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phương thức thanh toán</th>
                                        <td colspan="2">{{$item->payment}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ghi chú</th>
                                        <td colspan="2">{{$item->note}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="3" style="text-align: center; background: #ececec; font-size: 18px">Đơn hàng</th>
                                    </tr>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá bán</th>
                                        <th>Tạm tính</th>
                                    </tr>
                                    @php
                                        $result = 0;
                                    @endphp
                                    @foreach ($arrOrderDetail as $item)
                                    @php
                                        $price_after = round(($item->price / 100) * (100 - $item->sale_off), -3);
                                        $total = $price_after * $item->quantity;
                                        $result += $total;
                                    @endphp
                                    <tr>
                                        <td>{{$item->name}} <b>× {{$item->quantity}}</b> </td>
                                        <td>{{number_format($price_after, 0, ',', '.')}}₫</td>
                                        <td><?php echo number_format($total, 0, ',', '.');?>₫</td>
                                    </tr>
                                    @endforeach
                                    
                                    <tr>
                                        <th>Tổng tiền</th>
                                        <th colspan="2" style="text-align:center"><?php echo number_format($result, 0, ',', '.');?> VNĐ</th>
                                    </tr>
                                    

                                </table>
                                <a href="{{route('admin.order.index')}}" class="btn btn-primary" style="margin-top: 20px">Quay lại</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <!-- /.content-wrapper -->

@endsection