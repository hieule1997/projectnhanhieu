@extends('homemaster')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="fontend/css/bootstrap.css">
    <link rel="stylesheet" href="fontend/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="fontend/css/slick.css">
    <link rel="stylesheet" href="fontend/css/slick-theme.css">
    <link rel="stylesheet" href="fontend/css/lightbox.css">
    <link rel="stylesheet" href="fontend/css/main.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
                        <div class="head-intro" style="margin-bottom: 50px;">
                            <h3 class="title-intro">CÁC HÌNH ẢNH TIÊU BIỂU</h3>
                            <p class="my-name">MY LATEST WORK</p>
                        </div>
                        <div class="body-intro">
                            <div class="project">
                                <div class="project-header">
                                    <div class="tab-control" data-show="#procedure">
                                        <h3 class="title general-intro">HÌNH ẢNH</h3>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <div class="tab-content">
                                        <div class="tab-item active" id="procedure">
                                            <div class="item__">
                                                <div class="bs-row bs-row-sm15">
                                                    @foreach($image as $item)
                                                    <div class="bs-col sm-33-15">
                                                        <div class="items-project">
                                                            <div class="img">
                                                                <div class="ImagesFrame">
                                                                    <a href="" class="ImagesFrameCrop0">
                                                                    <img src="{{$item->imageFile }}" alt="" class="tall">
                                                                </a>
                                                                </div>
                                                                <a class="overlay" href="{{$item->imageFile }} " title="" data-lightbox="lightbox">
                                                                    <span class="view">
                                                                        <img src="fontend/images/zoom.png" alt="">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="row" id="pages" style="text-align: center;">
                                                    {{ $image->links() }}
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
     <script src="fontend/js/jquery-3.2.1.js"></script>
    <script src="fontend/js/slick.js"></script>
    <script src="fontend/js/bootstrap.js"></script>
    <script src="fontend/js/lightbox.js"></script>
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

