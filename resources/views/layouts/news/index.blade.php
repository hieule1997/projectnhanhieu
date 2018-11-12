@extends('adminmaster')
@section('css')

@endsection
@section('content')

    <div class="body">
        <div class="web-title bs-row">
            <div class="title-left">
                <h1 class="title"><img src="backend/images/icon_home.gif" alt=""><img src="backend/images/icon_arrow.gif" alt="" class="arrow">Trang chủ</h1>
            </div>
        <div class="title-right">
                        <button class="home__btn" type="button"><a href="{{ route('news.create')}}"><span>+</span>Thêm bài viết</a></button>
                    </div>
                </div>
                <div class="web-manager manager-news">
                    <div class="manager-content">
                        <div class="head">
                            <h3 class="title">QUẢN LÝ CỘNG ĐỒNG</h3>
                        </div>
                        <div class="content">
                            <div class="tab-content">
                                <div class="tab-item active" id="tab-push">
                                    @foreach($data as $item)
                                    <div class="item" id="item{{$item->id}}">
                                        <h4 class="title">{{ $item->newsTitle }}</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">{{$item->updated_at}}</span>
                                            <!-- <span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p> -->
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="{{ $item->newsImage}}" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="{{ route ('news.edit',$item->id)}}" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                     @php
                                                                $url_remove = route('news.destroy',$item->id);
                                                                
                                                      @endphp
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link" href="javascript:;" onclick="confirmRemove('{{$url_remove}}','{{$item->id}}');">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row" id="pages" style="text-align: center;">
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('js')
    <script type="text/javascript">
  
        function confirmRemove(url,id) {
          var check = window.confirm('Bạn có chắc chắn muốn xóa');
          if(check){
             $.ajax({
              "type": "DELETE",
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
        $(".control-item").click(function() {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $($(this).attr("data-show")).siblings().slideUp();
            $($(this).attr("data-show")).slideDown();
        });
        $(".show__popup").click(function() {
            $(".web").addClass("popup-active");
            $(".popup").addClass("active");
            $($(this).attr("show-popup")).siblings().removeClass("active");
            $($(this).attr("show-popup")).addClass("active");
        });
        $(".close__popup").click(function() {
            $(".web").removeClass("popup-active");
            $(this).parents(".popup").removeClass("active");
        });
        $(".edit__btn").click(function() {
            $(this).next(".tool-content").toggleClass("active");
            $(this).parents(".item").siblings().find(".tool-content").removeClass("active");
        })
        $(document).scroll(function() {
            $(".tool-content").removeClass("active");
        })

    </script>
@endsection
