@extends('admin.app')
@section('title','Trang Chính')
@section('content')
  <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row" >
          <a href="#">
            <div class="col-lg-3 col-xs-4">
              <div class="small-box">
                <div class="inner">
                  <h1><i class="fa fa-edit"></i></h1>
                  <p><h4>Quản lý địa điểm</h4></p>
                </div>
              </div>
            </div></a>
            <a href="#">
            <div class="col-lg-3 col-xs-4">
              <div class="small-box">
                <div class="inner">
                  <h1><i class="fa fa-pie-chart"></i></h1>
                  <p><h4>Quản lý món ăn</h4></p>
                </div>
              </div>
            </div></a>
          
            <a href="#">
            <div class="col-lg-3 col-xs-4">
              <div class="small-box">
                <div class="inner">
                  <h1><i class="fa fa-institution"></i></h1>
                  <p><h4>Quản lý tài khoản</h4></p>
                </div>
              </div>
            </div></a>
            <a href="#">
            <div class="col-lg-3 col-xs-4">
              <div class="small-box">
                <div class="inner">
                  <h1><i class="fa fa-list-alt"></i></h1>
                  <p><h4>Quản lý bình luận</h4></p>
                </div>
              </div>
            </div></a>
            <a href="#">
            <div class="col-lg-3 col-xs-4">
              <div class="small-box">
                <div class="inner">
                  <h1><i class="fa fa-newspaper-o"></i></h1>
                  <p><h4>Quản lý tin tức</h4></p>
                </div>
              </div>
            </div></a>
            <a href="">
            <div class="col-lg-3 col-xs-4">
              <div class="small-box">
                <div class="inner">
                  <h1><i class="fa fa-navicon"></i></h1>
                  <p><h4>Quản lý góp ý</h4></p>
                </div>
              </div>
            </div></a>
            <a href="">
            <div class="col-lg-3 col-xs-4">
              <div class="small-box">
                <div class="inner">
                  <h1><i class="fa fa-user"></i></h1>
                  <p><h4>Quản lý dánh giá</h4></p>
                </div>
              </div>
            </div></a>
            <a href="">
            <div class="col-lg-3 col-xs-4">
              <div class="small-box">
                <div class="inner">
                  <h1><i class="fa fa-users"></i></h1>
                  <p><h4>Quản lý hình ảnh</h4></p>
                </div>
              </div>
            </div></a>
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row" >
          <h2>Thống kê</h2>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-android-contact"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Địa điểm</span>
                 
                  <span class="info-box-number">gfgfhh</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa ion-android-contacts"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Món ăn</span>
                
                 <span class="info-box-number">gfgfhh</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-social-buffer"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Bình luận</span>
                
                 <span class="info-box-number">gfgfhh</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-paper"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Tin tức</span>
                 <span class="info-box-number">gfgfhh</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -
           <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <div class="box-tools pull-right">
                <button  data-widget="collapse"><i class="fa fa-minus"></i></button>
                 
              </div>
                  <h3 class="box-title">Lịch sử user</h3>
                </div><!-- /.box-header -->
               

                <div class="box-body">
                <div class="tieude">
                  <span >LỊCH SỬ QUẢN LÝ ĐỊA ĐIỂM</span>
                </div>
                
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                       
                        <th>Thời gian thêm bảng điểm</th>
                        <th>Thời gian cập nhật bảng điểm</th>
                        <th>Thời gian xóa bảng điểm</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                   
                      <tr>
                         <td>1</td>
                        <td>fdgfh</td>
                        <td>ffghg</td>
                        <td>fgfg</td>
                        <td>fdsdffdg</td>
                      </tr>
                    

                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

           
           

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </section><!-- /.content -->

 
@endsection