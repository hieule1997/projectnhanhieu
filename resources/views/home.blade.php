@extends('homemaster')
@section('css')

@endsection

@section('content')
 <main class="main-home">
        <div class="show__left">
            <div class="bs-container">
                <div class="show__">
                    <span class="open_"><i class="fa fa-bars"></i></span>
                </div>
            </div>
        </div>
        @include('layouts.left')
        <div class="right">
            <div class="img-center">
                <img src="fontend/images/img-1.jpg" alt="">
            </div> 
            <div class="info">
                <h3>Dương Văn Khoa</h3>
                <p>Chuyên gia tư vấn <br> Giải pháp Cloud-Service</p>
                <a href="/about">Check Our Work</a>
            </div>
        </div>
    </main>
@endsection
@section('js')
     <script>
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
            $('.main-home').toggleClass('act');
        })

        $('.open_').click(function() {
            $('.left').toggleClass('active_');
            $('.left').removeClass('active');
        })

        $(window).on("load", function() {
            if ($(window).width() < 1200) {
                $(".left").addClass("active");
                $(".main-home").addClass("act");
            } else {
                $(".left").removeClass("active");
                $(".main-home").removeClass("act");
            }
        })
        $(window).resize(function() {
            if ($(window).width() < 1200) {
                $(".left").addClass("active");
                $(".main-home").addClass("act");
            } else {
                $(".left").removeClass("active");
                $(".main-home").removeClass("act");
            }
        })

    </script>
@endsection

