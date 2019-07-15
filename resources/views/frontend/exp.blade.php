<div class="experience" id="experience">
    <div class="fixCen">
        <h2 class="rs no-extend">CÁC DƯỢC LIỆU QUÝ</h2>
        <div id="slider-2">
            @foreach (\App\Site::getCommentIndex() as $comment)
                <div class="item">
                <div class="left">
                    <img src="{{url('files/images', $comment->image)}}" class="avatar" alt="Tên người" width="114" height="114">
                </div>
                <div class="right">
                    <div class="title"><a href="{{$comment->link}}">{{str_limit($comment->title, 60)}}</a></div>
                    <div class="name">{{$comment->name}}</div>
                    <div class="address">{{$comment->address}}</div>
                </div>
                <div class="bottom">
                    {{str_limit($comment->comment, 265)}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>