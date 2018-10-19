<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="backend/css/bootstrap.css">
    <link rel="stylesheet" href="backend/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="backend/css/slick-theme.css">
    <link rel="stylesheet" href="backend/css/slick.css">
    <link rel="stylesheet" href="backend/css/animate.css">
    @yield("css")
    <link rel="stylesheet" href="backend/css/aos.css">
    <link rel="stylesheet" href="backend/css/main.css">
</head>

<body>
    <div class="web">

        <section class="section-menu">
            <div class="logo">
                <a href="#" class="link"><img src="backend/images/logomeditch.png" alt="" style="width: 153px;
    margin: -14px;"></a>
                <span class="show__menu"><i class="fa fa-bars"></i></span>
            </div>
            <div class="menu-main">
                <span class="close__menu"><i class="fa fa-times"></i></span>
                <div class="menu-avatar">
                    <div class="header">

                        <div class="text">
                            <span class="avatar__name">Văn Khoa</span>
                            <span class="avatar__mail">@meditech.vn</span>
                        </div>
                    </div>

                </div>
                <div class="menu-nav">
                    <ul class="nav-list">
                        <li class="nav-list__item">
                            <a href="/" class="nav-list__link">
                           <span class="nav__img">
                               <img src="backend/images/icon_1.gif" alt="" class="show__img">
                               <img src="backend/images/icon_1.2.gif" alt="" class="hover__img">
                           </span>
                           Trang của bạn
                       </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="/" class="nav-list__link">
                            <span class="nav__img">
                                <img src="backend/images/icon_2.gif" alt="" class="show__img">
                                <img src="backend/images/icon_2.1.gif" alt="" class="hover__img">
                            </span>
                            Biểu đồ
                        </a>
                        </li>
                    </ul>
                    <p class="menu__desc">Quản lý</p>
                    <ul class="nav-list">
                        <li class="nav-list__item">
                            <a href="#" class="nav-list__link">
                               <span class="nav__img">
                                   <img src="backend/images/icon_3.gif" alt="" class="show__img">
                                   <img src="backend/images/icon_3.1.gif" alt="" class="hover__img">
                               </span>
                           Quản lý dự án nghiên cứu
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="{{ route('project.index')}}" class="nav-list__link">
                               <span class="nav__img">
                                   <img src="backend/images/icon_3.gif" alt="" class="show__img">
                                   <img src="backend/images/icon_3.1.gif" alt="" class="hover__img">
                               </span>
                           Quản lý dự án triển khai
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="{{ route('post.index')}}" class="nav-list__link">
                               <span class="nav__img">
                                   <img src="backend/images/icon_3.gif" alt="" class="show__img">
                                   <img src="backend/images/icon_3.1.gif" alt="" class="hover__img">
                               </span>
                           Quản lý cộng đồng
                            </a>
                        </li>

                        <li class="nav-list__item"> 
                            <a href="{{ route('news.index')}}" class="nav-list__link">
                            <span class="nav__img">
                                <img src="backend/images/icon_4.gif" alt="" class="show__img">
                                <img src="backend/images/icon_4.1.gif" alt="" class="hover__img">
                            </span>
                           Quản lý tin tức
                        </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="{{ route('image.index')}}" class="nav-list__link">
                            <span class="nav__img">
                                <img src="backend/images/icon_5.gif" alt="" class="show__img">
                                <img src="backend/images/icon_5.1.gif" alt="" class="hover__img">
                            </span>
                           Quản lý truyền thông
                        </a>
                        </li>
                    </ul>
                    <p class="menu__desc">Cá nhân</p>
                    <ul class="nav-list">
                        <li class="nav-list__item">
                            <a href="#" class="nav-list__link">
                           <span class="nav__img">
                               <img src="backend/images/icon_6.gif" alt="" class="show__img">
                               <img src="backend/images/icon_6.1.gif" alt="" class="hover__img">
                           </span>
                           Tùy chỉnh
                       </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#" class="nav-list__link">
                            <span class="nav__img">
                                <img src="backend/images/icon_7.gif" alt="" class="show__img">
                                <img src="backend/images/icon_7.1.gif" alt="" class="hover__img">
                            </span>
                           Cài đặt tài khoản
                        </a>
                        </li>

                    </ul>
                </div>
            </div>

        </section>
        <section class="section-content">
            <div class="header bs-row">
                <div class="header-left">
                    <div class="search-form">
                        <input type="text" class="search__input" placeholder="Search here...">
                        <button class="search__btn"><img src="backend/images/icon_search.gif" alt=""></button>
                    </div>
                </div>
                <div class="header-right bs-row">
                    <div class="right-item right-account">
                        <div class="head">
                            <div class="img">
                                <div class="backend/ImagesFrame">
                                    <a class="backend/ImagesFrameCrop0">
                                    <img src="backend/images/avatar.gif" />
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="avatar-list">
                                <li class="avatar-list__item">
                                    <a href="#" class="avatar-list__link">
                                avatar 1
                            </a>
                                </li>
                                <li class="avatar-list__item">
                                    <a href="#" class="avatar-list__link">
                                avatar 1
                            </a>
                                </li>
                                <li class="avatar-list__item">
                                    <a href="#" class="avatar-list__link">
                                avatar 1
                            </a>
                                </li>
                                <li class="avatar-list__item">
                                    <a href="#" class="avatar-list__link">
                                avatar 1
                            </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-item right-notice">
                        <div class="head">
                            <img src="backend/images/icon_notice.gif" alt="">
                        </div>
                        <div class="content"></div>

                    </div>

                </div>
            </div>
            @yield('content')

        </section>
    </div>
    <!--jquery-->
    <script type="text/javascript" src="backend/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="backend/js/bootstrap.js"></script>
    <script type="text/javascript" src="backend/js/aos.js"></script>
    <script type="text/javascript" src="backend/js/slick.js"></script>
    <script type="text/javascript" src="backend/js/main.js"></script>
    @yield("js")




</body>

</html>
