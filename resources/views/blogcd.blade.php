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
                        <span class="open_"><i class="fa fa-bars"></i></span>
                    </div>
                </div>
            </div>
            <div class="introduct">
                <div class="bs-container">
                    <div class="content-intro">
                        <div class="head-intro">
                            <h3 class="title-intro">CÔNG TÁC CỘNG ĐỒNG</h3>
                            <p class="my-name">BÀI VIẾT MỚI NHẤT</p>
                        </div>
                        <div class="body-intro">
                            <div class="blog">
                                <div class="item__">
                                    <div class="bs-row bs-row-sm15">
                                        @foreach($data as $item)
                                        <div class="bs-col md-33-15 sm-50-15">
                                            <div class="items-news">
                                                <div class="img">
                                                    <div class="ImagesFrame">
                                                        <div class="ImagesFrameCrop0">
                                                            <img src="{{ $item->image}}" alt="">
                                                        </div>
                                                    </div>
                                                    <a href="" class="overl">

                                                    </a>
                                                    <div class="title-content">
                                                        <h4>{{$item->postTitle}}</h4>
                                                        <p>Posted by : <span>Admin</span></p>
                                                        <!-- <p>on : <span>Sports</span></p> -->
                                                    </div>
                                                    <a href="" class="link">
                                                        
                                                    </a>
                                                    <div class="date">
                                                        <p class="day">{{ date('d',strtotime($item->createDate)) }}</p>
                                                        <p class="month">Tháng {{ date('m',strtotime($item->createDate)) }}</p>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="cont">
                                                        <p>{{ $item->summary }}</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="view">
                                                    <div class="bs-row">
                                                        <div class="bs-col tn-33">
                                                            <p><i class="fa fa-eye"></i>2155</p>
                                                        </div>
                                                        <div class="bs-col tn-33">
                                                            <p><i class="fa fa-thumbs-up"></i>952</p>
                                                        </div>
                                                        <div class="bs-col tn-33">
                                                            <p><i class="fa fa-comments"></i>218</p>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="continue">
                                                    <a href="#">READ MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row" id="pages">
                                    {{ $data->links() }}
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

