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
                        <button class="home__btn" type="button">Lưu</button>
                        <button class="home__btn" type="button">Màn hình desktop</button>
                    </div>  
                </div>
                <div class="web-content">
                    <iframe src="/" frameborder="0" scrolling="no" id="the_iframe"></iframe>
                </div>
            </div>
    
@endsection
@section('js')
@endsection
