@extends('homemaster')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="fontend/css/bootstrap.css">
    <link rel="stylesheet" href="fontend/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="fontend/css/slick.css">
    <link rel="stylesheet" href="fontend/css/slick-theme.css">
    <link rel="stylesheet" href="fontend/css/main.css">
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
                    <div class="head-intro">
                        <h3 class="title-intro">GIỚI THIỆU</h3>
                        <p class="my-name">TÔI LÀ Dương Văn Khoa</p>
                    </div>
                    <div class="body-intro">
                        <div class="main-content">
                            <div class="infomation">
                                <div class="bs-row bs-row-md10">
                                    <div class="bs-col md-33-10 sm-50-10">
                                        <div class="avatar-intro">
                                            <div class="ImagesFrame">
                                                <div class="ImagesFrameCrop0">
                                                    <img src="fontend/images/avatar.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bs-col md-66-10">
                                        <div class="info-item">
                                            <div class="bs-row bs-row-xs15">
                                                <div class="bs-col md-50-15 sm-0 xs-50-15">
                                                    <p class="left-info">Họ và Tên :<span>Dương Văn Khoa</span></p>
                                                    <p class="left-info">Địa chỉ :<span>Số 1,Ngõ 37,Trần Quốc Hoàn, Cầu Giấy,Hà Nội </span></p>
                                                    <p class="left-info">Điện thoại :<span> +4573-8365-9374</span></p>
                                                    <p class="left-info">Email :<span>Khoa.vanduong@meditech.vn</span></p>
                                                </div>
                                                <div class="bs-col md-50-15 sm-0 xs-50-15">
                                                    <p class="left-info">Ngày sinh :<span>January 1985</span></p>
                                                    <p class="left-info">Công việc :<span>Charima</span></p>
                                                    <p class="left-info">Skype :<span>Khoa văn Dương</span></p>
                                                    <p class="left-info">Website :<span>www.meditech.vn</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>I’m a Front End Develpoer and UI Designer Based in Austin. I have a Passion for Creating Clean, Beautiful, Interactive, Minimalistic, Responsive and User Friendly UI, Developed by Modular, Scalable and Functional Code. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal. I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown.</p>
                                        </div>
                                        <div class="link">
                                            <div class="link-contact">
                                                <a href="\lienhe">LIÊN HỆ</a>
                                            </div>
                                            <!-- <div class="link-download">
                                                <a href="">DOWNLOAD CV</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-news">
                                <div class="bs-row bs-row-md15">
                                    <div class="bs-col md-50-15">
                                        <div class="exp">
                                            <div class="head">
                                                <h4 class="title">KINH NGHIỆM LÀM VIỆC</h4>
                                            </div>
                                            <div class="body">
                                                <div class="list">
                                                    @foreach($activity as $item)
                                                    <div class="list-item">
                                                        <p class="year">2015 - 2016</p>
                                                        <h4 class="title-list">{{ $item->intervaltime }}</h4>
                                                        <p class="content-list">{{ $item->activityText }}</p>
                                                    </div>
                                                   @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="bs-col md-50-15">
                                        <div class="achievement">
                                            <div class="head">
                                                <h4 class="title">THÀNH TỰU NỔI BẬT</h4>
                                            </div>
                                            <div class="body">
                                                <div class="list">
                                                    @foreach($achievement as $item)
                                                    <div class="list-item">
                                                        <p class="year">2015 - 2016</p>
                                                        <h4 class="title-list">{{ $item->achievementName }}</h4>
                                                        <p class="content-list">{{ $item->achievementText}}</p>
                                                    </div>
                                                    @endforeach
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
            <!-- <div class="slide-about">
                <div class="bs-container">
                    <div class="head-intro">
                        <h3 class="title-intro">CÁC ĐỐI TÁC</h3>
                        <p class="my-name">HỌ NÓI GÌ VỀ SẢN PHẨM CỦA TÔI</p>
                    </div>
                    <div class="body-intro">
                        <div class="slide-content">
                            <div class="slide-item">
                                <p class="talk">I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me. un strikes the upper surface of the impenetrable foliage of my trees. I throw myself down among the tall grass by the trickling stream; and,</p>
                                <div class="img">
                                    <div class="ImagesFrame">
                                        <div class="ImagesFrameCrop0">
                                            <img src="fontend/images/img-slide.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="sender-name">Abdur Rahim</p>
                                <p class="job">CEO of Theme-Valley</p>
                            </div>
                            <div class="slide-item">
                                <p class="talk">I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me. un strikes the upper surface of the impenetrable foliage of my trees. I throw myself down among the tall grass by the trickling stream; and,</p>
                                <div class="img">
                                    <div class="ImagesFrame">
                                        <div class="ImagesFrameCrop0">
                                            <img src="fontend/images/img-slide.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="sender-name">Abdur Rahim</p>
                                <p class="job">CEO of Theme-Valley</p>
                            </div>
                            <div class="slide-item">
                                <p class="talk">I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me. un strikes the upper surface of the impenetrable foliage of my trees. I throw myself down among the tall grass by the trickling stream; and,</p>
                                <div class="img">
                                    <div class="ImagesFrame">
                                        <div class="ImagesFrameCrop0">
                                            <img src="fontend/images/img-slide.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="sender-name">Abdur Rahim</p>
                                <p class="job">CEO of Theme-Valley</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </main>
@endsection
@section('js')
    <script src="fontend/js/slick.js"></script>
    <script>
        $('.slide-content').slick({
            dots: false,
            autoplay: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
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
