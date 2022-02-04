<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{ asset('pictlog/css/item.css') }}">
    <link rel="stylesheet" href="{{asset('pictlog/css/reset.css') }}">
    <!--タイトルフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">
    <!--横スライド-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>投稿した写真</title>
  </head>

  <body>


    <header class="header">
      <div class="header_ttl">


        <h1 class="header_ttl_h1">
          <!--アプリタイトル記入-->
        </h1>

      </div>
      <!--ナビバー-->
      <nav class="nav">
        <ul class="nav_list">
          <!--topへのリンク-->
          <li class="nav_item"><a href="/top" class="nav_item_a"><img src="{{ asset('pictlog/img/iconhome2.png')}}" class="header_icon_img"></a></li>
          <!--マイページへのリンク-->
          <li class="nav_item"> <a href="/{$id}" class=" nav_item_a">
              <img src="{{ asset('pictlog/img/icon_mypage.png') }}" class="header_icon_img">
            </a></li>
        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>



    <!--全体の箱-->
    <div class="inner-box">
      <!--投稿された画像-->
      <!--横スライド-->
      <!--画像-->


      <div class="slid_box">
        <!-- ← -->
        <div class="prev-btn btns">
          <i class="fas fa-angle-left fa-3x"></i>
        </div>
        <div class="slider">
          <div class="controller">

            <!--スライド中身-->
            <div class="slide">

              <form action="/item_scr/{{ $photo->image }}" method="get">
                @csrf

                <ul>
                  @isset($photo->image)
                  <li><img src="storage/image/{{($photo->image)}}" value="{{$photo->name}}" name="image" alt="画像" class="slide_img_first" multiple /></li>
                  <li><img src="storage/image/{{($photo->image2)}}" value="{{$photo->name}}" name="image2" alt="画像" class="slide_img_list" multiple /></li>
                  <li><img src="storage/image/{{($photo->image3)}}" value="{{$photo->name}}" name="image3" alt="画像" multiple /></li>
                  <li><img src="storage/image/{{($photo->image4)}}" value="{{$photo->name}}" name="image4" alt="画像" multiple /></li>
                  <li><img src="storage/image/{{($photo->image5)}}" value="{{$photo->name}}" name="image5" alt="画像" multiple /></li>
                </ul>
                @else
                <img src="{{ asset('pictlog/img/noimage.png') }}" class="top_my_img">
                @endisset
              </form>


            </div>

          </div>


        </div>
        <!--slide_box-->



        <!--　→ -->
        <div class=" next-btn btns">
          <i class="fas fa-angle-right fa-3x"></i>
        </div>

      </div>
      <!--画像横スライドおわり-->

      <!--下のポインター-->
      <div class="indicator">
        <!--spanを増やすと画像選択の丸が増える-->
        <span id="active"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!--下のポインターここまで-->

      <!--投稿内容-->

      <div class="item_discription">

        <form action="/item_add" method="get">
          @csrf
          <textarea name="content" rows="15" cols="100%" placeholder="記事の内容" class="textarea">{{$photo->content}}</textarea>
          <!--  <p class="textarea" name="contact</p>-->
        </form>

      </div>


      <!---->
      <!---->
      <!--いいね、コメントエリア箱-->
      <div class=" message_area">
        <!--ユーザー情報、いいね、コメントアイコン-->
        <div class="icon_area">
          <ul class="icon_area_list">

            <!--ユーザーアイコン-->
            <li class="massage_icon_li_img">
              <a href="/{{$item->id}}"><img src="/storage/image/{{$item->image}}" class="massage_icon_img"></a>
            </li>
            <li class="massage_icon_li_name">
              <p class="user_name">{{$item->name}}</p>
            </li>
            <!--いいね-->
            <li class="massage_icon_li">
              <img src="{{ asset('pictlog/img/like128.png') }}" class="massage_icon">
            </li>
            <!--コメント-->
            <li class="massage_icon_li">
              <img src="{{ asset('pictlog/img/icon_coment.png') }}" class="massage_icon">
            </li>
            <!--削除ボタン-->
            <li class="massage_icon_li">
              @if (Auth::user()->id == $item->id)
              <form action="{{ route('item_scr.delete', ['id' => $photo->id]) }}" method="post" class="form_delete_icon">
                @csrf
                <button class="delete_button">削除</button>
              </form>
              @endif
            </li>
          </ul>
        </div>
      </div>
      <!--コメントエリア-->
      <div class="comment_area"></div>
    </div>

    <!--savascript-->
    <script src="{{ asset('pictlog/js/item.js') }}"></script>

    </div>
  </body>
</thml>