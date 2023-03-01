@extends('templates.admin.master')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý phần giới thiệu</h1>
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
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Slogan</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($arrIntro as $item)
                    @php
                      $urlEdit = route('admin.intro.edit', ['id' => $item->intro_id]);
                    @endphp    
                    <tr>
                      <td>{{$item->intro_id}}</td>
                      <td>{{$item->name}}</td>
                      
                      <td>
                        <a href="{{$urlEdit}}" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-sm-6">
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