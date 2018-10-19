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
                        <button class="home__btn" type="button"><span>+</span>thêm bài viết</button>
                    </div>
                </div>
                <div class="web-manager manager-news">
                    <div class="manager-content">
                        <div class="head">
                            <h3 class="title">QUẢN LÝ TRANG CON</h3>
                        </div>
                        <div class="content">
                            <div class="tab-control">
                                <div class="control-item active" data-show="#tab-push">
                                    <p class="desc control__push">Đã đưa lên website</p>
                                </div>
                                <div class="control-item" data-show="#tab-draft">
                                    <p class="desc control__draft">Bản nháp</p>
                                </div>
                                <div class="control-item" data-show="#tab-recycle">
                                    <p class="desc control__recycle">Thùng rác</p>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-item active" id="tab-push">
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item" active>
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="##deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="##deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-item" id="tab-draft">
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item" active>
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="##deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="##deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-item" id="tab-recycle">
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item" active>
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="##deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="##deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4 class="title">Công trình</h4>
                                        <p class="desc"><span class="time"><img src="backend/images/icon_clock.gif" alt="">May 19, 2018 9:05 AM</span><span class="comment"><img src="backend/images/icon_comment.gif" alt="">Bình luận(0)</span></p>
                                        <div class="img">
                                            <div class="img-content">
                                                <img src="backend/images/manager_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item-tool">
                                            <button class="edit__btn" type="button"><img src="backend/images/manager_page_icon4.gif" alt=""></button>
                                            <div class="tool-content">
                                                <ul class="tool-list">
                                                    <li class="tool-list__item">
                                                        <a href="#" class="tool-list__link" class="icon__show">
                                                        <img src="backend/images/edit_icon_black.gif" alt="">
                                                        <img src="backend/images/edit_icon_white.gif" alt="" class="icon__hover">
                                                        Sửa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" show-popup="#delete">
                                                        <img src="backend/images/delete_icon_black.gif" alt="" class="icon__show">
                                                        <img src="backend/images/delete_icon_white.gif" alt="" class="icon__hover">
                                                        Xóa
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item active">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#success">
                                                        <img src="backend/images/active_icon_black.gif" alt="">
                                                        <img src="backend/images/active_icon_white.gif" alt="" class="icon__hover">
                                                        Kích hoạt
                                                        </a>
                                                    </li>
                                                    <li class="tool-list__item">
                                                        <a class="tool-list__link show__popup" class="icon__show" show-popup="#deactive-success">
                                                        <img src="backend/images/deactive_icon_black.gif" alt="">
                                                        <img src="backend/images/deactive_icon_white.gif" alt="" class="icon__hover">
                                                        Hủy kích hoạt
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="popup" id="popup-notice">
            <div class="popup-content">
                <div class="popup-item" id="success">
                    <div class="popup-notice">
                        <span class="close__popup"><img src="backend/images/icon_close_notice.gif" alt=""></span>
                        <div class="notice-content">
                            <h4 class="title"><img src="backend/images/icon_success.gif" alt="">THÔNG BÁO</h4>
                            <p class="desc">Dữ liệu của bạn được kích hoạt thành công</p>
                        </div>
                    </div>
                </div>
                <div class="popup-item" id="deactive-success">
                    <div class="popup-notice">
                        <span class="close__popup"><img src="backend/images/icon_close_notice.gif" alt=""></span>
                        <div class="notice-content">
                            <h4 class="title"><img src="backend/images/deactive_success.gif" alt="">THÔNG BÁO</h4>
                            <p class="desc">Dữ liệu của bạn được hủy kích hoạt thành công</p>
                        </div>
                    </div>
                </div>
                <div class="popup-item" id="delete">
                    <div class="popup-notice">
                        <div class="notice-content">
                            <h4 class="title"><img src="backend/images/icon_notice_popup.gif" alt="">XÁC NHẬN?</h4>
                            <p class="desc">Bạn có muốn xóa dữ liệu này không?</p>
                            <button class="notice__btn close__popup white__btn" type="button">Hủy bỏ</button>
                            <button class="notice__btn close__popup agree__btn red__btn" type="button">Đồng ý</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
@section('js')
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
