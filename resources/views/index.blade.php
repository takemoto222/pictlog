<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('pictlog/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('pictlog/css/reset.css') }}">
    <!--タイトルフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">

    <title>マイページ</title>
  </head>

  <body>

    <div class="inner-box">
      <header class="header">
        <div class="header_ttl">
          <h1 class="header_ttl_h1">Pict Log</h1>
        </div>
        <!--ナビバー-->
        <nav class="nav">
          <ul class="nav_list">
            <li class="nav_item"><a href="/top" class="nav_item_a"><img src="{{ asset('pictlog/img/iconhome2.png')}}" class="header_icon_img"></a></li>
            <!--マイページリンク-->
            <li class="nav_item">
              <a href="/{{$user->user_id}}" class=" nav_item_a">
                <img src="{{ asset('pictlog/img/icon_mypage.png') }}" class="header_icon_img">
              </a>
            </li>

            <!--マイページ編集リンク-->
            <li class="nav_item">
              <a href="{{ route('mypage_edit', ['id' => $user->id ]) }}" class="nav_item_a">
                <img src="{{ asset('pictlog/img/seting.png') }}" class="header_icon_img">
              </a>
            </li>
            <!--投稿画面リンク-->
            <li class="nav_item">
              <a href="/item_add" class="nav_item_a">
                <img src="{{ asset('pictlog/img/camera_icon2.png') }}" class="header_icon_img">
              </a>
            </li>
            <!--お問い合わせ-->
            <li class="nav_item"><a href="/contact" class="nav_item_a"><img src="{{ asset('pictlog/img/iconmall3.png') }}" class="header_icon_img"></a></li>
          </ul>
        </nav>
        <!--ナビバーここまで-->
      </header>

      <!--トップビュー-->
      <div class="top">
        <div class="top_inner">

          <!--更新させたい-->
          <form action="/update/{{ $item->id }}" method="get" class="form_area">
            @csrf
            <!--左、画像エリア-->
            <div class="top_my_img_area">
              <!--画像-->
              <div class="topimg_box">
                @isset($item->image)
                <img src="{{ asset('storage/image/' . $item->image) }}" name="image" value="{{$item->image}}" name="image" alt="画像" class="top_my_img">
                @else
                <img src="{{ asset('pictlog/img/noimage.png') }}" class="top_my_img">
                @endisset
              </div>
            </div>
            <!--画像ここまで-->
          </form>

          <!--名前、プロフィール-->
          <div class="toptext_area">

            <!--フォローフォロワー数-->
            <form action="" method="" class="follow_form">
              <label class="follow_number">follow</label>
              <label class="follow_number">follower</label>
            </form>
            <!--フォロワーここまで-->


            <form action="/update/{{ $item->id }}" method="get" class="form_area_2">
              @csrf

              <!--どのユーザーが更新するのかid特定-->
              <input type="hidden" name="id" value="{{$item->id}}">
              <p name="name" class="name_area">{{$item->name}} </p>
              <!--どのユーザーが更新するのかid特定-->
              <input type="hidden" name="id" value="{{$item->id}}">
              <!--自己紹介文記入-->
              <p name="profile" class="textarea">{{$item->profile}}</p>
          </div>
          </form>
          <!--更新させたいここまで-->
        </div>
      </div>








      <!--メイン-->
      <main class="main">
        <div class="main_inner">
          <!--タブ-->
          <div class="tab">
            <ul class="tab-menu">
              <li class="tab-menu__item active">
                <img src="{{ asset('pictlog/img/camera_icon2.png') }}" class="icon_img">
              </li>
              <li class="tab-menu__item">
                <img src="{{ asset('pictlog/img/like128.png') }}" class="icon_img">
              </li>
              <li class="tab-menu__item">
                <img src="{{ asset('pictlog/img/seting.png') }}" class="icon_img">
              </li>
            </ul>
            <!--コンテンツ全体-->
            <div class="tab-content">
              <!--コンテンツ内１-->
              <div class="tab-content__item show">
                <p class="my_postlist">投稿</p>
                <div class="content1_inenr">
                  <!--一区切り-->
                  <!--投稿した画像-->
                  @for($i = 0; $i < count($post); $i++) <div class="content1_box">
                    <div class="content1_img_area">
                      <a href="{{ route('item_scr', ['id'=>$post[$i]['id']]) }}"><img src="/storage/image/{{$post[$i]['image']}}" class="content1_img"></a>
                    </div>
                </div>
                @endfor
                <!--投稿した画像直張-->
                <!--直張をコメントアウトしています
                    <div class="content1_box">
                    <div class="content1_img_area">
                      <a href="item.html"><img src="{{ asset('pictlog/img/food_1125.jpg') }}" class="content1_img"></a>
                    </div>
                  </div>  直張をコメントアウトしています -->
                <!--以下複製-->
                <!--上複製-->
              </div>
            </div>
            <!--コンテンツ内2-->
            <div class="tab-content__item">
              <p class="my_likelist">いいねした投稿</p>
              <!--コンテンツ1コピー-->
              <div class="content1_inenr">
                <!--一区切り-->
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="{{ asset('pictlog/img/kawa3.jpg') }}" class="content1_img"></a>
                  </div>
                </div>
                <!--以下複製-->
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="{{ asset('pictlog/img/kawa2.jpg') }}" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="{{ asset('pictlog/img/kawa1.jpg') }}" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="{{ asset('pictlog/img/kawa3.jpg') }}" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="{{ asset('pictlog/img/kawa3.jpg') }}" class="content1_img"></a>
                  </div>
                </div>
                <!--上複製-->
              </div>
              <!--コンテンツ１コピー-->
            </div>
            <!--コンテンツ内3-->
            <div class="tab-content__item">
              <p class="my_seting">設定</p>
            </div>
          </div>
        </div>
        <!--タブここまで-->
    </div>

    </main>
    </div>

    <script src="{{ asset('pictlog/js/main.js') }}"></script>

  </body>