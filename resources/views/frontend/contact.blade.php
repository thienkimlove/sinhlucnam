@extends('frontend.template')

@section('content')
    <section class="body pr">
        <div class="fixCen">
            <div class="groups">
                <div class="left-content">
                    <div class="steps">
                        <h2 class="rs"><a href="{{url('/')}}" title="Trang chủ">Trang chủ</a></h2>
                        <span>|</span>
                        <h3 class="rs"><a href="{{url('lien-he')}}" title="Liên hệ">Liên hệ</a></h3>
                    </div>
                    <div class="contact-content">
                        @include('frontend.form_get_phone', ['is_full' => true])
                        <div class="address-group">
                            <strong>Công ty truyền thông sức khỏe là vàng</strong><br>
                            Đ/c: Thôn 3, xã Phù Lưu Tế, Huyện Mỹ Đức, Thành phố Hà Nội<br>
                            Email: suckhoevangnguoiviet@gmail.com<br>
                            SĐT: 0243.9901436 <br> <br>
                        </div>
                        <div class="embed-ggmap">
                            <img src="{{url('viemgan/images/gg.jpg')}}" alt="" class="imgFull" width="728" height="425">
                        </div>
                    </div>
                    @include('frontend.list_button')
                </div>
                @include('frontend.right_normal')
            </div>
        </div>
        @include('frontend.exp')
    </section>
@endsection
