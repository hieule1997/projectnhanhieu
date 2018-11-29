<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Thêm bài viết</title>
    <link rel="stylesheet" href="/backend/css/bootstrap.css">
    <link rel="stylesheet" href="/backend/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/backend/css/slick-theme.css">
    <link rel="stylesheet" href="/backend/css/slick.css">
    <link rel="stylesheet" href="/backend/css/summernote.css">
    <link rel="stylesheet" href="/backend/css/animate.css">
    <link rel="stylesheet" href="/backend/css/aos.css">
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="/backend/css/darkroom.css">
    <link rel="stylesheet" href="/backend/css/main.css">
</head>

<body> 
    <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
     @csrf
    <div class="web web-edit">
        <section class="section-content">
            <div class="header bs-row">
                <div class="bs-container">
                    <div class="bs-row">
                        <div class="header-left">
                            <button class="edit__btn" type="button" id="close">Đóng </button>
                            <!-- <button class="edit__btn" type="button">Xem trước</button> -->
                            <button class="edit__btn" type="submit" >Lưu thay đổi</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="bs-container">
                    <div class="edit-content">

                        <div class="img">
                            <img src="/backend/images/icon_img_social.gif" style="width: 50%" alt="" id="preImg">
                            <!-- <input type="hidden" name="fileImg" id="imgfile"> -->
                            <button class="edit__btn edit__img show__popup" type="button"><img src="/backend/images/icon_edit.gif" alt="">Sửa</button>
                        </div>
                        <div class="head">
                            <h3 class="title">Tiêu đề bài viết</h3>
                            <button class="edit__btn edit__title" type="button"><img src="/backend/images/icon_edit.gif" alt=""></button>
                            <div class="edit-text">
                                <input type="text" class="edit__input" name="newsTitle" value="">
                            </div>
                        </div>
                        <div class="content">
                            <div>
                                <label>Link bài viết</label>
                                <input type="text" name="linkNews">
                            </div> 
                            <div>
                                <label>Link hiển thị bài viết</label>
                                <input type="text" name="linkShow">
                            </div>
                           <div style="margin-bottom: 30px">
                                <label>Thông tin báo chí</label>
                                <!-- <input type="text" name="summary"> -->
                                <textarea name="newsInfor" id="sumaryckeditor"></textarea>

                            </div>
                            <!-- <div >
                                Nội dung dự án
                                <textarea name="" id="contentckeditor"></textarea>

                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="popup" id="popup-edit">
        <div class="popup-content">
            <div class="step active" id="step1">
                <div class="popup-header">
                    <button class="back__btn close__popup" type="button"><img src="/backend/images/icon_back.gif" alt="">Thư viện ảnh</button>
                </div>
                <div class="popup-body">
                    <div class="bs-row bs-row-md15">
                        <div class="bs-col md-62-15">
                            <div class="img-edit">
                                <div class="popup-slide">
                                    <div class="item">
                                        <div class="img">
                                            <img src="/backend/images/icon_img_social.gif" style="width: 50%" alt="" id="showImg">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="bs-col md-38-15">
                            <div class="edit-form">
                                <div class="bs-row bs-row-sm15">
                                    <div class="bs-col md-100-15 sm-50-15">
                                        <div class="item">
                                            <label for="">Chọn ảnh</label>
                                            <input type="file" name="newsImage" id="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="popup-footer">
                    <button class="delete__btn popup__btn close__popup" type="button">Xóa</button>
                    <button class="save__btn popup__btn close__popup" type="button">Lưu</button>
                </div>
            </div>

        </div>
    </div>
</form>

    <!--jquery-->
   
    <script type="text/javascript" src="/backend/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="/backend/js/bootstrap.js"></script>
    <script type="text/javascript" src="/backend/js/aos.js"></script>
    <script type="text/javascript" src="/backend/js/slick.js"></script>
    <script type="text/javascript" src="/backend/js/summernote.js"></script>
    <script type="text/javascript" src="/backend/js/fabric.js"></script>
    <script type="text/javascript" src="/backend/js/darkroom.js"></script>
    <script type="text/javascript" src="/backend/js/main.js"></script>
    <script src="/laravel-ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="/laravel-ckeditor/adapters/jquery.js" type="text/javascript"></script>
    <script>
        // $('#contentckeditor').ckeditor();
        $('#sumaryckeditor').ckeditor();
    </script>
   
    <script type="text/javascript">
            function readURLinp(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // alert(e.target.result);          
              $('#showImg').attr('src', e.target.result);
              $('#preImg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
        $("#image").change(function() {
          readURLinp(this);
        });

    </script>
    <script>
        $('.text-content').summernote({
            height: 300,
            tabsize: 2
        });


        $("#close").on('click',function(){
            window.location.assign("/news");
        });
        $(".popup-slide").find(".edit__img").click(function() {
            var imgURL = $(this).prev().children("img").attr("src");
            $(".tool-body").html('<div class="img"><img src="" /></div>');

            $(this).parents(".step").next().find(".tool-body").find("img").attr("src", imgURL);
            $("#target").attr("id", "");
            $(this).parents(".step").next().find(".tool-body").find("img").attr("id", "target");
            var htmlBase = $(".tool-body").html();
            var dkrm = new Darkroom('#target', {
                minWidth: 100,
                minHeight: 100,
                maxWidth: 600,
                maxHeight: 500,
                ratio: 4 / 3,
                backgroundColor: '#000',
                plugins: {

                    crop: {
                        quickCropKey: 67,

                    }
                },

                initialize: function() {
                    var cropPlugin = this.plugins['crop'];
                    cropPlugin.requireFocus();
                }
            });
            $(this).parents(".step").removeClass("active");
            $(this).parents(".step").next().addClass("active");
            $(".reset__btn").click(function() {
                $(".tool-body").html(htmlBase);
                var dkrm = new Darkroom('#target', {
                    minWidth: 100,
                    minHeight: 100,
                    maxWidth: 600,
                    maxHeight: 500,
                    ratio: 4 / 3,
                    backgroundColor: '#000',
                    plugins: {

                        crop: {
                            quickCropKey: 67,

                        }
                    },

                    initialize: function() {
                        var cropPlugin = this.plugins['crop'];
                        cropPlugin.requireFocus();
                    }
                });
            });
        });



        $(".show__popup").click(function() {
            $(".web").addClass("popup-active");
            $(".popup").addClass("active");
        });
        $(".close__popup").click(function() {
            $(".web").removeClass("popup-active");
            $(this).parents(".popup").removeClass("active");


        });
        $(".control-select").find(".item").click(function() {
            $(this).parents(".control-select").find(".select-head").children("img").attr("src", $(this).children("img").attr("src"));
        });
        $(".control-item").click(function() {
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
            $($(this).attr("data-show")).siblings().slideUp();
            $($(this).attr("data-show")).slideDown();
        });
        $(".delete__btn").click(function() {
            $(".media-content").find(".active").remove();

        });

        $(".close__tool").click(function() {
            $(this).parents(".step").removeClass("active");
            $(this).parents(".step").prev().addClass("active");
        });
        $(".save__btn").click(function() {
            $(".popup-content").find(".step").removeClass("active");
            $("#step1").addClass("active");
        });




        $(".edit__title").click(function() {
            $(".edit-text").toggleClass("active");
        });
        $(".edit__input").keyup(function() {
            $(this).parents(".head").find(".title").html($(this).val());
        })

        
    </script>
</body>

</html>
