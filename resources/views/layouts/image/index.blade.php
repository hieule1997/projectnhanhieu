@extends('adminmaster')
@section('css')

@endsection
@section('content')
    <div class="web-content content-page">
                    <div class="media-page">
                        <div class="head">
                            <h3 class="title">Quản lý phương tiện truyền thông</h3>
                        </div>
                        <div class="content">
                            <div class="tab-control">
                                <div class="control-item active" data-show="#images" show-button=".add__img">
                                    <p class="desc">hình ảnh</p>
                                </div>
                                <div class="control-item" data-show="#video" show-button=".add__video">
                                    <p class="desc">video</p>
                                </div>

                            </div>

                            <div class="tab-content">
                                <div class="tab-item" id="images" style="display: block;">
                                    <div class="media-button">
                                        <div class="base-button">
                                            <input type="file" class="file__img">
                                             <button class="media__btn add__btn add__video show__popup base__btn active" type="button" show-popup="#popup-addimage"><img src="images/icon_video_add.gif" alt="">Thêm Image</button>
                                            <!-- <input type="file" class="file__document"> -->
                                        </div>
                                        <button class="media__btn edit__btn show__popup more__btn" type="button" show-popup="#popup-edit"><img src="images/icon_edit.gif" alt="">Sửa</button>
                                        <button class="media__btn delete__btn more__btn show__popup" type="button" show-popup="#popup-delete"><img src="images/icon_recycle.gif" alt="">Xóa</button>
                                    </div>

                                    <div class="media-day">
                                        <div class="media-content">
                                            <div class="bs-row bs-row-sm15 bs-row-lg15 bs-row-md10 bs-row-xs10 bs-row-tn5">
                                                @foreach($image as $item)
                                                <div class="bs-col lg-25-15 md-25-10 sm-25-15 xs-33-10 tn-50-5">
                                                    <div class="img">
                                                        <div class="ImagesFrame">
                                                            <a class="ImagesFrameCrop0">
                                                                <img src="{{$item->imageFile}}" />
                                                            </a>
                                                        </div>
                                                        <div class="overlay">
                                                            <span class="number">{{$item->id}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row" id="pages" style="text-align: center;">
                                            {{ $image->links() }}
                                        </div>

                                </div>
                                <div class="tab-item" id="video">
                                    <div class="media-button">
                                        <div class="base-button">
                                            <button class="media__btn add__btn add__video show__popup base__btn" type="button" show-popup="#popup-add"><img src="images/icon_video_add.gif" alt="">Thêm video</button>
                                        </div>
                                        <button class="media__btn delete__btn more__btn show__popup" type="button" show-popup="#popup-delete"><img src="images/icon_recycle.gif" alt="">Xóa</button>
                                    </div>
                                    <div class="media-day">
                                        <div class="media-content">
                                            <div class="bs-row bs-row-sm15 bs-row-lg15 bs-row-md10 bs-row-xs10 bs-row-tn5">
                                                @foreach($video as $item)
                                                <div class="bs-col lg-25-15 md-25-10 sm-25-15 xs-33-10 tn-50-5">
                                                    <div class="video">
                                                        <div class="ImagesFrame">
                                                            <a class="ImagesFrameCrop0">
                                                                <img src="{{$item->videoFile}}" />
                                                            </a>
                                                        </div>
                                                        <div class="overlay">
                                                            <span class="number">{{ $item->id }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="pages" style="text-align: center;">
                                            {{ $video->links() }}
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <div class="popup" id="popup-edit">
        <div class="popup-content">
            <div class="step active" id="step1">
                <form method="POST" action=" {{ route('image.store')}}" enctype="multipart/form-data">
                    @csrf
                <div class="popup-header">
                    <button class="back__btn close__popup" type="button"><img src="images/icon_back.gif" alt="">Thư viện ảnh</button>
                </div>
                <div class="popup-body">
                    <div class="bs-row bs-row-md15">
                        <div class="bs-col md-62-15">
                            <div class="img-edit">
                                <div class="popup-slide">
                                    <img src="/backend/images/icon_img_social.gif" alt="" id="showedit" >
                                </div>

                            </div>
                        </div>
                        <div class="bs-col md-38-15">
                            <div class="edit-form">
                                <div class="bs-row bs-row-sm15">
                                    <div class="bs-col md-100-15 sm-50-15">
                                        <div class="item">
                                            <label for="">Tiêu đề ảnh</label>
                                            <input type="text" class="edit__input" name="imageName">
                                        </div>
                                        <div class="item">
                                            <label for="">Chọn ảnh</label>
                                            <input type="file" name="imageFile" id="imageedit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="popup-footer">
                    <button class="delete__btn popup__btn close__popup" type="button">Xóa</button>
                    <button class="save__btn popup__btn close__popup" type="submit">Lưu</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="popup" id="popup-addimage">
        <div class="popup-content">
            <div class="step active" id="step1">
                <form  method="POST" action=" {{ route('image.store')}}" enctype="multipart/form-data">
                <div class="popup-header">
                    @csrf
                    <button class="back__btn close__popup" type="button"><img src="images/icon_back.gif" alt="">Thư viện ảnh</button>
                </div>
                <div class="popup-body">
                    <div class="bs-row bs-row-md15">
                        <div class="bs-col md-62-15">
                            <div class="img-edit">
                                <div class="popup-slide">
                                    <img src="/backend/images/icon_img_social.gif" alt="" id="showadd">
                                </div>
                            </div>
                        </div>
                        <div class="bs-col md-38-15">
                            <div class="edit-form">
                                <div class="bs-row bs-row-sm15">
                                    <div class="bs-col md-100-15 sm-50-15">
                                        <div class="item">
                                            <label for="">Tiêu đề ảnh</label>
                                            <input type="text" class="edit__input">
                                        </div>
                                        <div class="item">
                                            <label for="">Chọn ảnh</label>
                                            <input type="file" name="imageFile" id="imageadd">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="popup-footer">
                    <button class="delete__btn popup__btn close__popup" type="button">Xóa</button>
                    <button class="save__btn popup__btn close__popup" type="submit" id="addimage">Lưu</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="popup" id="popup-add">
        <form method="POST" action=" {{ route('video.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="popup-content">
                <span class="close__popup"><img src="backend/images/icon_close_red.gif" alt=""></span>
                <div class="upload-content">
                    <div class="upload-img dropzone upVideo">
                        <img src="backend/images/icon_video.gif" alt="" id="prevideo">
                    </div>
                    <p class="desc__big">Chọn tệp để tải lên</p>
                    <input type="file" name="imgvideo" id="imagevideo" class="video__input" >
                    <input type="text" name="linkvideo" class="video__link video__input" value="https://www.youtube.com/?gl=VN">
                    <button class="upload__btn" type="submit">Tải lên</button>
                </div>
            </div>
        </form>
    </div>
    <div class="popup" id="popup-delete">
        <div class="popup-content popup-delete">
            <span class="close__popup"><img src="images/icon_close_red.gif" alt=""></span>
            <div class="notice-content">
                <h4 class="title"><img src="images/icon_notice_popup.gif" alt="">XÁC NHẬN?</h4>
                <p class="desc">Bạn có chắc chắn xóa mục này, Phương tiện đã xóa sẽ chắc chắn không còn xuất hiện ở bất kỳ đâu trên trang web của bạn, bao gồm tất cả các bài đăng, trang và tiện ích con. Điều này không thể được hoàn tác.</p>
                <button class="notice__btn close__popup white__btn" type="button">Hủy bỏ</button>
                <button class="notice__btn close__popup agree__btn red__btn" type="button">Đồng ý</button>
            </div>
        </div>
    </div>
@endsection
@section('js')
        <script type="text/javascript">
            $('.upVideo').on('click',function(){
                $('intput[name="imagevideo"]').change();
            });
        </script>
        <script type="text/javascript">
            function readURLinp(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // alert(e.target.result);          
                  $('#showadd').attr('src', e.target.result);
                  // $('#preImg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
              }
            }
            $("#imageadd").change(function() {
              readURLinp(this);
            });

        </script>
        <script type="text/javascript">
            function readURLinp2(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // alert(e.target.result);          
                  $('#prevideo').attr('src', e.target.result);
                  // $('#preImg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
              }
            }
            $("#imagevideo").change(function() {
              readURLinp2(this);
            });

        </script>
        <script type="text/javascript">
            function readURLinp1(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // alert(e.target.result);          
                  $('#showedit').attr('src', e.target.result);
                  // $('#preImg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
              }
            }
            $("#imageedit").change(function() {
              readURLinp1(this);
            });

        </script>
    <script type="text/javascript">
        function confirmRemove(url,id) {
          var check = window.confirm('Bạn có chắc chắn muốn xóa');
          if(check){
             $.ajax({
              "type": "POST",
              "url": url,
              "data": {
                "_token" : "{{csrf_token()}}",
                "id":"id"
              },
              "datatype": "json",
              success : function(rs) {
                console.log(rs);
                if(rs.status == 204)
                {
                  $('#item'+id).remove();
                  alert("Xóa thành công");

                }else{
                  alert('Lỗi');
                }

              }
          });
        }
      }
    </script>
   <script>
        $(".media-content").find(".img").click(function() {
            $(this).toggleClass("active");
            // if ($(this).hasClass("active")) {
            //     $(".popup-slide").append('<div class="item"><div class="img"><img src="' + $(this).children(".ImagesFrame").find("img").attr("src") + '" alt=""></div></div>');
            // } else {
            //     $("[src='" + $(this).children(".ImagesFrame").find("img").attr("src") + "']").parents(".item").remove();

            // }
            if ($(this).parents('.media-content').has('.img.active').length > 0) {
                $(this).parents(".tab-item").find(".more__btn").addClass("active");
            } else {
                $(this).parents(".tab-item").find(".more__btn").removeClass("active");
            }
        });
        $(".media-content").find(".video").click(function() {
            $(this).toggleClass("active");
            if ($(this).parents('.media-content').has('.video.active').length > 0) {
                $(this).parents(".tab-item").find(".more__btn").addClass("active");
            } else {
                $(this).parents(".tab-item").find(".more__btn").removeClass("active");
            }
        });
        $(".media-content").find(".document-item").click(function() {
            $(this).toggleClass("active");
            if ($(this).parents('.media-content').has('.document-item.active').length > 0) {
                $(this).parents(".tab-item").find(".more__btn").addClass("active");
            } else {
                $(this).parents(".tab-item").find(".more__btn").removeClass("active");
            }
        });
        $(".media-button").children(".edit__btn").click(function() {
            var slidebasic = $(".img-edit").html();
            $(".popup-slide").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                fade: false,
                autoplay: false,
                infinite: false,
            });
            $(".close__popup").click(function() {
                $(".img-edit").html(slidebasic);
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
        });
        $(".add__img").click(function() {
            $(".file__img").click();
        });
        $(".add__document").click(function() {
            $(".file__document").click();
        });
        $(".add__all").click(function() {
            $(".file__add").click();
        });
        $(".show__popup").click(function() {
            $(".web").addClass("popup-active");
            $($(this).attr("show-popup")).addClass("active");
        });
        $(".close__popup").click(function() {
            $(".web").removeClass("popup-active");
            $(this).parents(".popup").removeClass("active");
        });
        $(".control-select").find(".item").click(function() {
            $(this).parents(".control-select").find(".select-head").children("img").attr("src", $(this).children("img").attr("src"));
            $($(this).attr("data-show")).siblings().slideUp();
            $($(this).attr("data-show")).slideDown();
        });
        $(".control-item").click(function() {
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
            $($(this).attr("show-button")).siblings(".base__btn").removeClass("active");
            $($(this).attr("show-button")).addClass("active");
            $($(this).attr("data-show")).siblings().slideUp();
            $($(this).attr("data-show")).slideDown();
        });
        $(".delete__btn").click(function() {
            var parentChose = $(this).parents(".tab-item").attr("id");
            console.log(parentChose);

            $("#popup-delete").find(".agree__btn").click(function() {
                $('#' + parentChose).find(".media-day").find(".active").remove();
                if ($('#' + parentChose).find(".media-day").has('.img.active').length > 0) {
                    $('#' + parentChose).find(".more__btn").addClass("active");
                } else {
                    $('#' + parentChose).find(".more__btn").removeClass("active");
                }
                if ($('#' + parentChose).find(".media-day").has('.document-item.active').length > 0) {
                    $('#' + parentChose).find(".more__btn").addClass("active");
                } else {
                    $('#' + parentChose).find(".more__btn").removeClass("active");
                }
                if ($('#' + parentChose).find(".media-day").has('.video.active').length > 0) {
                    $('#' + parentChose).find(".more__btn").addClass("active");
                } else {
                    $('#' + parentChose).find(".more__btn").removeClass("active");
                }
            });


        });
        $(".close__tool").click(function() {
            $(this).parents(".step").removeClass("active");
            $(this).parents(".step").prev().addClass("active");
        });
        $(".save__btn").click(function() {
            $(".popup-content").find(".step").removeClass("active");
            $("#step1").addClass("active");
        });

    </script>
@endsection
