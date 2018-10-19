@extends('homemaster')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="fontend/css/bootstrap.css">
    <link rel="stylesheet" href="fontend/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="fontend/css/slick.css">
    <link rel="stylesheet" href="fontend/css/slick-theme.css">
    <link rel="stylesheet" href="fontend/css/lightbox.css">
    <link rel="stylesheet" href="fontend/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
   <main class="main-about bs-row">
       @include('layouts.left')
        <div class="right-about">
            <div class="show__left">
                <div class="bs-container">
                    <div class="show__">
                        <span class="open_"><i class="fas fa-bars"></i></span>
                    </div>
                </div>
            </div>
            <div class="introduct">
                <div class="bs-container">
                    <div class="content-intro">
                        <div class="head-intro" style="margin-bottom: 44px;">
                            <h3 class="title-intro">LIÊN HỆ</h3>
                            <p class="my-name">HÃY LIÊN HỆ VỚI TÔI</p>
                        </div>
                        <div class="body-intro">
                            <div class="contact">
                                <div class="opening">
                                    <p>Please Feel free to get in Touch Anytime, whether for Work Inquiries or to just say Hello!</p>
                                </div>
                                <div class="content-contact">
                                    <div class="bs-row bs-row-sm15">
                                        <div class="bs-col lg-50-15 md-40-15 sm-40-15 offset-lg offset-md offset-sm">
                                            <div class="info">
                                                <div class="item-info">
                                                    <div class="tit">
                                                        <h4>ĐỊA CHỈ</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p>133 South Kutubkhali, Donia, Jatrabari<br>Dhaka-1236</p>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="tit">
                                                        <h4>THÔNG TIN LIÊN HỆ</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p>onathondoe@gmail.com<br>01 (800) 433 633</p>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="tit">
                                                        <h4>GIỜ LÀM VIỆC</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p>Daily 10.00 to 22.00 ( Sunday Avilable )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-col lg-50-15 md-60-15 sm-60-15">
                                            <div class="form">
                                                <div class="bs-row bs-row-sm15">
                                                    <div class="bs-col sm-50-15">
                                                        <input type="text" class="user" placeholder="Tên">
                                                    </div>
                                                    <div class="bs-col sm-50-15">
                                                        <input type="text" class="email" placeholder="Email">
                                                    </div>
                                                    <div class="bs-col sm-50-15">
                                                        <input type="text" class="phone" placeholder="Điên thoại">
                                                    </div>
                                                    <div class="bs-col sm-50-15">
                                                        <input type="text" class="website" placeholder="Website">
                                                    </div>
                                                    <div class="bs-col sm-100-15">
                                                        <textarea name="" id="" cols="30" rows="10" placeholder="Description"></textarea>
                                                        <button class="send">GỬI</button>
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
        </div>
    </main>
@endsection
@section('js')
    <script src="fontend/js/slick.js"></script>
    <script src="fontend/js/bootstrap.js"></script>
    <script src="fontend/js/lightbox.js"></script>
    <script src="fontend/js/jquery-3.2.1.js"></script>
<script>
        $(".project-content").find(".tab-item").fadeOut();
        $(".project-content").find(".active").fadeIn();
        $(".tab-control").click(function() {
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
            $($(this).attr("data-show")).siblings().fadeOut();
            $($(this).attr("data-show")).fadeIn();
        });


        $(document).ready(function() {
            $(".ImagesFrameCrop").each(function() {
                $(this).removeClass("wide")
                $(this).removeClass("tall")
                if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
                    $(this).addClass("wide");
                } else {
                    $(this).addClass("tall");
                }
            });
            $(".ImagesFrameCrop").children("img").each(function() {
                $(this).removeClass("wide")
                $(this).removeClass("tall")
                if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
                    $(this).addClass("wide");
                } else {
                    $(this).addClass("tall");
                }
            });


            $(".ImagesFrameCrop1").each(function() {
                $(this).removeClass("wide")
                $(this).removeClass("tall")
                if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
                    $(this).addClass("wide");
                } else {
                    $(this).addClass("tall");
                }
            });
            $(".ImagesFrameCrop1").children("img").each(function() {
                $(this).removeClass("wide")
                $(this).removeClass("tall")
                if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
                    $(this).addClass("wide");
                } else {
                    $(this).addClass("tall");
                }
            });


            $(".ImagesFrameCrop0").each(function() {
                $(this).removeClass("wide")
                $(this).removeClass("tall")
                if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
                    $(this).addClass("wide");
                } else {
                    $(this).addClass("tall");
                }
            });
            $(".ImagesFrameCrop0").children("img").each(function() {
                $(this).removeClass("wide")
                $(this).removeClass("tall")
                if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
                    $(this).addClass("wide");
                } else {
                    $(this).addClass("tall");
                }
            });
        })

        $('.show-click').click(function() {
            $('.left').toggleClass('active');
            $('.main-about').toggleClass('act');
        })

        $('.open_').click(function() {
            $('.left').toggleClass('active_');
            $('.left').removeClass('active');
        })

        $(window).on("load", function() {
            if ($(window).width() < 1200) {
                $(".left").addClass("active");
                $(".main-about").addClass("act");
            } else {
                $(".left").removeClass("active");
                $(".main-about").removeClass("act");
            }
        })
        $(window).resize(function() {
            if ($(window).width() < 1200) {
                $(".left").addClass("active");
                $(".main-about").addClass("act");
            } else {
                $(".left").removeClass("active");
                $(".main-about").removeClass("act");
            }
        })

    </script>
@endsection

