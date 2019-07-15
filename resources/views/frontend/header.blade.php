<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",13099]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
<div class="banner-ads left">
    @foreach (\App\Site::getFrontendBanners()->where('position', 3) as $banner)
        <a href="{{$banner->link}}" title="" target="_blank">
            <img src="{{url('files/images', $banner->image)}}" alt="" width="171" height="454">
        </a>
    @endforeach
</div>
<div class="btn-group-fix banner-ads">
    <a href="https://www.facebook.com/samnhungcuongluc.vn" title="Fanpage"><img src="{{url('viemgan/images/fb-icon.png')}}" alt="Fanpage" width="63" height="63"></a>
    <a href="tel: 18001190" title="Gọi tư vấn"><img src="{{url('viemgan/images/call-icon.png')}}" alt="Gọi tư vấn" width="63" height="63"></a>
    <a href="{{url('phan-phoi')}}" title="Mua hàng"><img src="{{url('viemgan/images/cart-icon.png')}}" alt="Giỏ hàng" width="63" height="63"></a>
    <a href="{{url('phan-phoi')}}" title="Điểm bán sản phẩm"><img src="{{url('viemgan/images/location-icon.png')}}" alt="Điểm bán sản phẩm" width="63" height="63"></a>
</div>
<header class="pr">
    <div class="bg-top">
        <a href="javascript:void(0)" class="miniMenu-btn pa open-main-nav" data-menu="#main-nav"></a>
    </div>
    <div class="fixCen head-info">
        <div class="box-above">
            <a href="tel: 18001190" class="call-hotline">
                Hotline Tuệ Linh: <strong>18001190</strong> (Miễn cước)
            </a>
            <div class="btns">
                <a href="javascript:void(0)" class="btn-regis" title="Đăng ký">Đăng ký</a>
                <a href="javascript:void(0)" class="btn-login" title="Đăng nhập">Đăng nhập</a>
            </div>
            <a href="{{ url('dang-bai-viet') }}" class="btn-postArticle" title="Đăng bài viết">
                <img src="{{url('viemgan/images/btn-post.png')}}" alt="" class="imgFull">
            </a>
        </div>
        <div class="box-under">
            <h1 class="rs"><a href="{{ url('/') }}" class="logo" title="Sinh lực nam" target="_blank">
                    <img src="{{url('viemgan/images/logo2.png')}}" alt="Sinh lực nam" width="170" height="99" class="imgFull">
                </a></h1>
            <span class="slogan">
                    Trang cộng đồng cùng nhau chia sẻ kinh nghiệm
                    <i>tăng cường sinh lực nam</i>
                </span>
            <form action="{{url('tim-kiem')}}" method="GET" class="search-on-top">
                <input type="text" name="q" placeholder="Tìm kiếm">
            </form>
        </div>
    </div>
    <nav id="main-nav" class="menu-mb">
        <ul class="fixCen pr rs">
            <li class="{{(isset($page) && $page == 'index')? 'active' : ''}}"><a href="{{url('/')}}" title="Trang chủ">
                    Home
                </a></li>
            @foreach (\App\Site::getAllParentCategories() as $parentCategory)
                @if ($parentCategory->subCategories->count() > 0)
                    <li class="{{(isset($page) && $page == $parentCategory->slug) ? 'active parentMenu' : 'parentMenu'}}">
                        <a href="{{url('chuyen-muc', $parentCategory->slug)}}" title="{{$parentCategory->name}}">{{$parentCategory->name}}</a>
                        <ul class="submenu">
                            @foreach ($parentCategory->subCategories as $subCategory)
                                <li><a href="{{url('chuyen-muc', $subCategory->slug)}}" title="{{$subCategory->name}}">{{$subCategory->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="{{(isset($page) && $page == $parentCategory->slug) ? 'active' : ''}}"><a href="{{url('chuyen-muc', $parentCategory->slug)}}" title="{{$parentCategory->name}}">{{$parentCategory->name}}</a></li>
                @endif
            @endforeach

            <li class="{{(isset($page) && $page == 'hoi-dap') ? 'active' : ''}}"><a href="{{url('hoi-dap')}}" title="Hỏi đáp">Hỏi đáp</a></li>
            <li class="{{(isset($page) && $page == 'video')? 'active' : ''}}"><a href="{{url('video')}}" title="Video">Video</a></li>
            <li class="{{(isset($page) && $page == 'phan-phoi')? 'active' : ''}}"><a href="{{url('phan-phoi')}}" title="Phân phối">Phân phối</a></li>
            <li class="{{(isset($page) && $page == 'lien-he')? 'active' : ''}}"><a href="{{url('lien-he')}}" title="Liên hệ">Liên hệ</a></li>
        </ul>
    </nav>
</header>