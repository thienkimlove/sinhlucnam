<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta content='CSVN' name='generator'/>
    <meta property="fb:app_id" content="140815253144512"/>
    <title>{{!empty($meta_title)? $meta_title : 'Trang cộng đồng chia sẻ kinh nghiệm tăng cường sinh lực nam'}}</title>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link rel="stylesheet" href="{{url('viemgan/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('viemgan/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('viemgan/css/common.css')}}">

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="description" content="{{!empty($meta_desc)? $meta_desc : 'Trang cộng đồng chia sẻ kinh nghiệm tăng cường sinh lực nam'}}"/>
    <meta name="keyword" content="{{!empty($meta_keywords)? $meta_keywords : 'sinh lý, sinh lực, sâm cau, nhung hươu, nhân sâm, mãn dục nam,'}}"/>
    <meta property="fb:app_id" content="1569708656596422"/>
</head>
<body>
<div class="wrapper home pr">
    @include('frontend.header')
     @yield('content')
   @include('frontend.footer')
</div>
<div class="popup popup-regis px">
    <div class="popup-content pa">
        <a href="javascript:void(0)" class="close-popup pa" title="Đóng lại">X</a>
        <div class="content">
            <div class="title">
                <strong>Tạo tài khoản</strong>
                Bạn hãy tạo tài khoản mà bạn muốn
            </div>
            <form id="register_form" action="{{ url('saveRegister') }}" method="POST">
                <div class="rows">
                    <label>Tên đăng nhập <orange>*</orange></label>
                    <input name="login" type="text" placeholder="Tên đăng nhập">
                    {{ csrf_field() }}
                </div>
                <div class="rows">
                    <label>Email <orange>*</orange></label>
                    <input name="email" type="text" placeholder="Email">
                </div>
                <div class="rows">
                    <label>Số điện thoại <orange>*</orange></label>
                    <input name="phone" type="text" placeholder="Số điện thoại">
                </div>
                <div class="rows">
                    <label>Mật khẩu <orange>*</orange></label>
                    <input name="password" type="text" placeholder="Mật khẩu">
                    <input type="checkbox" checked /> Hiển thị mật khẩu
                </div>
                <div class="rows">
                    <label>Họ tên <orange>*</orange></label>
                    <input name="name" type="text" placeholder="Họ và tên">
                </div>
                <div class="rows">
                    <label>Tỉnh/ Thành phố sinh sống <orange>*</orange></label>
                    <input name="province" type="text" placeholder="Tỉnh/ Thành phố">
                </div>
                <div class="rows">
                    <label>Ngày/tháng/năm sinh <orange>*</orange></label>
                    <input name="dob" type="text" placeholder="DD/MM/YYYY">
                </div>
                <div class="rows">
                    <label>CMND/ Căn cước công dân/ Hộ chiếu <orange>*</orange></label>
                    <input name="ssn" type="text" placeholder="CMDN/ Căn cước công dân/ Hộ chiếu">
                </div>
                <div class="rows theLast">
                    <label>Địa chỉ cụ thể <orange>*</orange></label>
                    <textarea name="address" id="" cols="30" rows="4" placeholder="Địa chỉ cụ thể"></textarea>
                </div>
                <div class="note">
                    Khi bạn nhấn nút "Tạo tài khoản" dưới đây thì có nghĩa là bạn đã đồng ý với các <br>
                    <a href="http://www.sinhlucnam.vn/thoa-thuan-cung-cap-va-su-dung-dich-vu-mang-xa-hoi-sinhlucnam-vn.html" title="Điều khoản quy định" target="_blank">Điều khoản quy định</a>
                    của sinhlucnam.vn
                </div>
                <a href="javascript:void(0)" id="click_register" class="btn-create" title="Tạo tài khoản">Tạo tài khoản</a>
                <div class="txt">Vui lòng xác nhận qua email</div>
                <div id="errors" class="errors">Vui lòng nhập đầy đủ các thông tin trên</div>
            </form>
        </div>
    </div>
</div>
<div class="popup popup-login px">
    <div class="popup-content pa">
        <a href="javascript:void(0)" class="close-popup pa" title="Đóng lại">X</a>
        <div class="content">
            <div class="title">
                <strong>Đăng nhập</strong>
                Chào bạn ! Hãy đăng nhập để gửi bài viết
            </div>
            <form action="">
                <div class="rows">
                    <label>Tên đăng nhập</label>
                    <input type="text" placeholder="Tên đăng nhập">
                </div>
                <div class="rows">
                    <label>Mật khẩu</label>
                    <input type="text" placeholder="Mật khẩu">
                    <input type="checkbox" checked /> Ghi nhớ
                </div>
                <a href="{{ url('/') }}" class="btn-loginF" title="Tạo tài khoản">Đăng nhập</a>
                <div class="rows">
                    <a href="javascript:void(0)" class="forgot-pass" title="Quên mật khẩu">Quên mật khẩu</a>
                </div>
                <div class="errors">Vui lòng nhập đầy đủ các thông tin trên</div>
            </form>
        </div>
    </div>
</div>
</body>
<script>
    var Config = {};
    Config.url = '{{ url('/') }}';

</script>

<script src="{{url('viemgan/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('viemgan/js/angular.min.js')}}"></script>
<script src="{{url('viemgan/js/SmoothScroll.js')}}" type="text/javascript"></script>
<script src="{{url('viemgan/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{url('viemgan/js/jquery.easing.min.js')}}" type="text/javascript"></script>
<script src="{{url('viemgan/js/common.js')}}" type="text/javascript"></script>

<script>
    $(function(){
        $('#box_submit').click(function(){
            var phone = $('#box_phone').val();
            var email = $('#box_email').val();
            var content = $('#box_content').val();

            if (!phone || !email || !content) {
                $('#box_message').show().text('Xin hãy nhập đủ thông tin!');
            } else {
                $('#getQues').submit();
            }
            return false;
        });
        $('#click_register').click(function(e){
            e.preventDefault();
            var phone = $('#register_form input[name=phone]').val();
            var email = $('#register_form input[name=email]').val();
            var address = $('#register_form textarea[name=address]').val();
            var name = $('#register_form input[name=name]').val();
            var dob = $('#register_form input[name=dob]').val();
            var ssn = $('#register_form input[name=ssn]').val();
            var province = $('#register_form input[name=province]').val();

            if (!phone || !email || !address || !name || !dob || !ssn || !province) {
                $('#errors').show();
            } else {
                $('#errors').hide();
                $('#register_form').submit();
            }
        });
    });
</script>

<script type="text/javascript" src="//media1.admicro.vn/cpa/admicro-core.min.js"></script><script type="text/javascript">window.admicro_cpa_q = window.admicro_cpa_q || [];window.admicro_cpa_q.push({event: "retargeting", id: 1633});</script>

<!-- Facebook Code Comment-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '140815253144512',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=140815253144512";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook Code Comment-->

<script type="text/javascript">
    (function () {
        var _eclickq = window._eclickq || (window._eclickq = []);
        if (!_eclickq.loaded) {
            var eclickTracking = document.createElement('script');
            eclickTracking.async = true;
            eclickTracking.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//s.eclick.vn/delivery/retargeting.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(eclickTracking, s);
            _eclickq.loaded = true;
        }
        _eclickq.push(['addPixelId', 13885]);
    })();
    window._eclickq = window._eclickq || [];
    window._eclickq.push(['track', 'PixelInitialized', {}]);
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100952423-1', 'auto');
  ga('send', 'pageview');

</script>

@yield('frontend_script')
</html>