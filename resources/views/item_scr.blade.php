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
    <title>商品画面</title>
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
          <li class="nav_item"><a href="/top" class="nav_item_a"><img src="{{ asset('pictlog/img/iconhome2.png')}}" class="header_icon_img"></a></li>
          <li class="nav_item"><a href="/" class="nav_item_a"><img src="{{ asset('pictlog/img/icon_mypage.png') }}" class="header_icon_img"></a></li>
          <li class="nav_item"><a href="/mypage_edit/{id}" class="nav_item_a"><img src="{{ asset('pictlog/img/seting.png') }}" class="header_icon_img"> </a></li>
          <li class="nav_item"><a href="/contact" class="nav_item_a"><img src="{{ asset('pictlog/img/iconmall3.png') }}" class="header_icon_img"></a></li>
        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>


    @foreach($photos as $photo)
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
                  <li><img src="storage/image/{{($photo->image)}}" value="{{$photo->name}}" name="image" alt="画像" multiple /></li>
                  <li><img src="storage/image/{{($photo->image)}}" value="{{$photo->name}}" name="image" alt="画像" multiple /></li>
                  <li><img src="storage/image/{{($photo->image)}}" value="{{$photo->name}}" name="image" alt="画像" multiple /></li>
                  <li><img src="storage/image/{{($photo->image)}}" value="{{$photo->name}}" name="image" alt="画像" multiple /></li>
                  <li><img src="storage/image/{{($photo->image)}}" value="{{$photo->name}}" name="image" alt="画像" multiple /></li>
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
        <span></span>

      </div>
      <!--下のポインターここまで-->

      <!--投稿内容-->

      <div class="item_discription">

        <form action="/item_add" method="get">
          @csrf
          <textarea name="content" rows="20" cols="100%" placeholder="記事の内容" class="textarea">{{$photo->content}}</textarea>
        </form>

      </div>


      <!---->
      <!---->
      <!--いいね、コメントエリア箱-->
      <div class="message_area">
        <!--いいね、コメントアイコン-->
        <div class="icon_area">
          <ul class="icon_area_list">
            <li class="massage_icon_li">
              <!--ユーザーアイコン-->
            </li>

            <li class="massage_icon_li">
              <!--ユーザーアイコンと名前-->

              {{$photo->name}}
            </li>

            <li class="massage_icon_li">
              <img src="{{ asset('pictlog/img/like128.png') }}" class="massage_icon">
            </li>
            <li class="massage_icon_li">
              <img src="{{ asset('pictlog/img/icon_coment.png') }}" class="massage_icon">
            </li>
          </ul>
        </div>

        <!--コメントエリア-->
        <div class="comment_area"></div>
      </div>
      @endforeach
      <!--savascript-->
      <script src="{{ asset('pictlog/js/item.js') }}"></script>

    </div>
  </body>
</thml>