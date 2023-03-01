@extends('templates.admin.master')

@section('main-content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2"></div>
      </div>
  </section>
      <?php  //var_dump($_SESSION['arrUser']) ?>
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h2 style="text-align:center">Đăng nhập</h2>
                      </div>
                  <!-- /.card-header -->
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <!-- Form Elements -->
                                  <div class="panel panel-default" style="text-align:center; width: 45%;margin: 20px auto 70px;">
                                      <div class="panel-body">
                                          <div class="row">
                                              <div class="col-md-12">
                                                @if (session('error'))
                                                    <span style="color: red">{{session('error')}}</span>
                                                @endif
                                                  <form role="form" active="" method="post" style="">
                                                    @csrf
                                                      <div class="form-group">
                                                          <label>Username</label>
                                                          <input type="text" name="username" class="form-control" />
                                                      </div>
                                                      <div class="form-group">
                                                          <label>Password</label>
                                                          <input type="password" name="password" class="form-control" />
                                                      </div>

                                                      <button type="submit" name="submit" class="btn btn-success btn-md">Đăng nhập</button>
                                                  </form>
                                              </div>

                                          </div>
                                      </div>
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

@endphp
