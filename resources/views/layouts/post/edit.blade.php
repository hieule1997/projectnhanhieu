@extends('layouts.adminmaster')

@section('content')
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Máy tính
                        <small>
                            Sản phẩm
                        </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                <i class="fa fa-dashboard">
                                </i>
                                Home
                            </a>
                        </li>
                        <li class="active">
                            máy tính
                        </li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <!-- /.nav-tabs-custom -->
                            <!-- Chat box -->
                            <!-- /.box (chat box) -->
                            <!-- TO DO List -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="box-tools pull-right">
                                    </div>
                                </div>
                                <div class="box-footer clearfix no-border">
                                </div>
                                <!-- /.box-header -->
                                 <form method="PUT" action="laptop/{{$model->id}}" enctype="multipart/form-data">
                                <div class="box-body">
                                    
                                    <div class="row" style="border: solid 1px; border-radius: 30px ;padding-top: 20px">
                                        <div class="col-md-4">
                                            <div class="form-group" >
                                                <label>
                                                    Tên Sản phẩm:
                                                </label>
                                                <input class="form-control" name="name_product" type="text" value="{{$model->name_product}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Giá:
                                                </label>
                                                <input class="form-control" name="cost" type="text" value="{{$model->cost}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Công nghệ CPU:
                                                </label>
                                                <input class="form-control" name="tech_cpu" type="text" value="{{$model->tech_cpu}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                   Ảnh :
                                                </label>
                                                <input class="form-control" name="anh" type="file">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                   Loại CPU:
                                                </label>
                                                <input class="form-control" name="loai_cpu" type="text" value="{{$model->loai_cpu}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Tốc độ CPU:
                                                </label>
                                                <input class="form-control" name="tocdo_cpu" type="text" value="{{$model->tocdo_cpu}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Tốc độ tối đa:
                                                </label>
                                                <input class="form-control" name="max_speed_cpu" type="text" value="{{$model->max_speed_cpu}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Tốc độ BUS:
                                                </label>
                                                <input class="form-control" name="speed_bus" type="text" value="{{$model->speed_bus}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                   RAM:
                                                </label>
                                                <input class="form-control" name="ram" type="text" value="{{$model->ram}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Loại RAM:
                                                </label>
                                                <input class="form-control" name="loai_ram" type="text" value="{{$model->loai_ram}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Tốc độ BUS RAM:
                                                </label>
                                                <input class="form-control" name="bus_ram" type="text" value="{{$model->bus_ram}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                   Hỗ trợ RAM tối đa :
                                                </label>
                                                <input class="form-control" name="max_ram" type="text" value="{{$model->max_ram}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Ổ cứng:
                                                </label>
                                                <input class="form-control" name="hardware" type="text" value="{{$model->hardware}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    kích thước màn hình :
                                                </label>
                                                <input class="form-control" name="kich_thuoc_man_hinh" type="text" value="{{$model->kich_thuoc_man_hinh}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Độ phân giải:
                                                </label>
                                                <input class="form-control" name="pixel" type="text" value="{{$model->pixel}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Công nghệ màn hình :
                                                </label>
                                                <input class="form-control" name="tech_pixel" type="text" value="{{$model->tech_pixel}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Màn hình cảm ứng:
                                                </label>
                                                <input class="form-control" name="man_hinh_cam_ung" type="text" value="{{$model->man_hinh_cam_ung}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Thiết kế đồ họa:
                                                </label>
                                                <input class="form-control" name="degins_card" type="text" value="{{$model->degins_card}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Card đồ họa:
                                                </label>
                                                <input class="form-control" name="card" type="text" value="{{$model->card}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Công nghệ âm thanh:
                                                </label>
                                                <input class="form-control" name="streos_tech" type="text" value="{{$model->streos_tech}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Cổng giao tiếp:
                                                </label>
                                                <input class="form-control" name="port" type="text" value="{{$model->port}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Kết nối không dây:
                                                </label>
                                                <input class="form-control" name="ket_noi_khong_day" type="text" value="{{$model->ket_noi_khong_day}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                   Khe đọc thẻ nhớ:
                                                </label>
                                                <input class="form-control" name="khe_doc_the_nho" type="text" value="{{$model->khe_doc_the_nho}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Ổ đĩa quang :
                                                </label>
                                                <input class="form-control" name="dia_quang" type="text" value="{{$model->dia_quang}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    webcam:
                                                </label>
                                                <input class="form-control" name="webcam" type="text" value="{{$model->webcam}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Đèn bàn phím :
                                                </label>
                                                <input class="form-control" name="den_ban_phim" type="text" value="{{$model->den_ban_phim}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Tính năng khác : 
                                                </label>
                                                <input class="form-control" name="tinh_nang_khac" type="text" value="{{$model->tinh_nang_khac}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Loại PIN:
                                                </label>
                                                <input class="form-control" name="loai_pin" type="text" value="{{$model->loai_pin}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Thông tin PIN :
                                                </label>
                                                <input class="form-control" name="thong_tin_pin" type="text" value="{{$model->thong_tin_pin}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Hệ điều hành :
                                                </label>
                                                <input class="form-control" name="he_dieu_hanh" type="text" value="{{$model->he_dieu_hanh}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Kích thước :
                                                </label>
                                                <input class="form-control" name="kich_thuoc" type="text" value="{{$model->kich_thuoc}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Trọng lượng :
                                                </label>
                                                <input class="form-control" name="trong_luong" type="text" value="{{$model->trong_luong}}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>
                                                    Chất liệu :
                                                </label>
                                                <input class="form-control" name="chat_lieu" type="text" value="{{$model->chat_lieu}}">
                                                </input>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                                    <div style="margin-top: 20px; text-align: center;border-top:solid 1px ;padding-top: 10px; border-radius :30px; ">
                                        <button class="btn btn-success" style="width:75px" type="submit">
                                            Submit
                                        </button>
                                        <button class="btn btn-danger" style="margin-right:20px ;margin-left: 20px ;width:75px" type="button" id="huy">
                                          <a href="{{route ('laptop.index')}}"> Hủy</a> 
                                        </button>
                                        <button class="btn btn-default" style="width:75px" id="reset" type="button">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                                </form>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                            <!-- quick email widget -->
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </section>
                <!-- /.content -->
@endsection('content')