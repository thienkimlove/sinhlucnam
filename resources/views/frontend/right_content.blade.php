<div class="right-content pr">
    @if ($rightVideos = \App\Site::getRightIndexVideos())
    <div class="box-video">
        <h3 class="global-title">
            <a href="{{url('videos')}}">Góc video</a>
        </h3>
        <div class="box-bd">
            @if ($firstRightVideo = $rightVideos->shift())
                <div class="data">
                    <iframe width="100%" height="250" src="{{\App\Site::getYoutubeEmbedUrl($firstRightVideo->code)}}" frameborder="0" allowfullscreen></iframe>
                    <h3>
                        {{$firstRightVideo->title}}
                    </h3>
                </div>
            @endif
            @foreach ($rightVideos as $rightVideo)
                <div class="item cf item-r">
                    <h3>
                        <a href="{{url('video', $rightVideo->slug)}}">{{$rightVideo->title}}</a>
                    </h3>
                </div>
            @endforeach

        </div>
    </div>
    @endif
    <div class="box-adv">
        <a href="http://www.sinhlucnam.vn/sam-cau-duoc-lieu-hang-dau-cho-sinh-luc-phai-manh.html" target="_blank"">
            <img src="{{url('viemgan/images/tu-van-2.png')}}" alt="Tư vấn miễn phí" width="317" height="76">
        </a>
    </div>
    <div class="box-adv">
        <a href="http://www.sinhlucnam.vn/thuc-hu-ve-loai-nhung-huou-tot-nhat-the-gioi.html" target="_blank">
            <img src="{{url('viemgan/images/diem-ban-2.png')}}" alt="Điểm bán sản phẩm" width="317" height="76">
        </a>
    </div>
    <div class="most-readed cf">
        <h3 class="global-title">
            <a href="#">BÀI VIẾT NỔI BẬT</a>
        </h3>
        <div class="box-bd boxHot">
            @foreach (\App\Site::getRightIndexPosts() as $rightIndexPost)
            <div class="item cf">
                <a href="#" class="thumb">
                    <img src="{{url('files/images', $rightIndexPost->image)}}" alt="hot" width="120" height="84">
                </a>
                <h4>
                    <a href="{{url($rightIndexPost->slug.'.html')}}">{{$rightIndexPost->title}}</a>
                </h4>
            </div>
            @endforeach
        </div>
    </div>
    <div class="Social">
        <div class="fb-page" data-href="https://www.facebook.com/samnhungcuongluc.vn" data-width="300" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/samnhungcuongluc.vn"><a href="https://www.facebook.com/samnhungcuongluc.vn">SINH LỰC NAM</a></blockquote></div></div>
    </div>
</div>