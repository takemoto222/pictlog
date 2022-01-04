<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('pictlog/css/top.css') }}">
    <link rel="stylesheet" href="{{asset('pictlog/css/reset.css') }}">
    <!--タイトルフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">

    <title>マイページ</title>
  </head>

  <body>

    <header class="header">
      <div class="header_ttl">
        <h1 class="header_ttl_h1">Pict Log</h1>
      </div>
      <!--ナビバー-->
      <nav class="nav">
        <ul class="nav_list">
          <li class="nav_item"><a href="/top" class="nav_item_a"><img src="{{ asset('pictlog/img/iconhome2.png')}}" class="header_icon_img"></a></li>

          <!--変更しました,
        topのリンクからマイページへ飛びたい-->
          <li class="nav_item">
            <a href="{{route('index', ['id' => $id->id])}}" class=" nav_item_a">
              <img src="{{ asset('pictlog/img/icon_mypage.png') }}" class="header_icon_img">
            </a>
          </li>

          <li class="nav_item"><a href="{{route('mypage_edit', ['id' => $id->id])}}" class="nav_item_a"><img src="{{ asset('pictlog/img/seting.png') }}" class="header_icon_img"> </a></li>

          <li class="nav_item"><a href="/contact" class="nav_item_a"><img src="{{ asset('pictlog/img/iconmall3.png') }}" class="header_icon_img"></a></li>

          <!--ログアウト-->
          <form method="POST" action="{{ route('logout') }}" nav_item>
            @csrf
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
              {{ __('Log Out') }}
            </button>
          </form>
        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>
    <!--インナーボックス-->
    <div class="inner-box">
      <!--トップビュー-->



      <div class="main_inner">
        <!--投稿されたコンテンツ　箱-->
        <div class="content_box">
          <div class="content_main_imgarea">
            <img src="{{ asset('pictlog/img/niku_1127.jpg') }}" class="main_img">
          </div>
          <!--ユーザー表示部分-->
          <div class="content_name_box">
            <!--トップ画像-->
            <div class="name_img_box">
              <img src="{{ asset('pictlog/img/meet1.jpg') }}" class="name_img">
            </div>
            <div class="name_box">
              <!--名前、投稿写真-->
              <form action="" method="" class="form_area">
                @csrf
                <!--どのユーザーが更新するのかid特定-->
                <!---->
                <input type="text" name="name" placeholder="名前" class="name_area">
              </form>
            </div>
          </div>
          <!--画像説明文-->
          <form action="#" method="#" class="content_form">
            @csrf
            <textarea name="item" rows="3" cols="100%" placeholder="写真説明" class="textarea">ご飯。</textarea>
          </form>
        </div>
        <!--コンテンツboxここまで-->

        <!--以下複製-->

        <!--投稿されたコンテンツ　箱-->
        <div class="content_box">
          <div class="content_main_imgarea">
            <img src="{{ asset('pictlog/img/niku_1127.jpg') }}" class="main_img">
          </div>
          <!--ユーザー表示部分-->
          <div class="content_name_box">
            <!--トップ画像-->
            <div class="name_img_box">
              <img src="{{ asset('pictlog/img/meet1.jpg') }}" class="name_img">
            </div>
            <div class="name_box">
              <!--名前、投稿写真-->
              <form action="" method="" class="form_area">
                @csrf
                <!--どのユーザーが更新するのかid特定-->
                <!---->
                <input type="text" name="name" placeholder="名前" class="name_area">
              </form>
            </div>
          </div>
          <!--画像説明文-->
          <form action="#" method="#" class="content_form">
            @csrf
            <textarea name="item" rows="3" cols="100%" placeholder="写真説明" class="textarea">ご飯。</textarea>
          </form>
        </div>
        <!--コンテンツboxここまで-->
        <!--投稿されたコンテンツ　箱-->
        <div class="content_box">
          <div class="content_main_imgarea">
            <img src="{{ asset('pictlog/img/niku_1127.jpg') }}" class="main_img">
          </div>
          <!--ユーザー表示部分-->
          <div class="content_name_box">
            <!--トップ画像-->
            <div class="name_img_box">
              <img src="{{ asset('pictlog/img/meet1.jpg') }}" class="name_img">
            </div>
            <div class="name_box">
              <!--名前、投稿写真-->
              <form action="" method="" class="form_area">
                @csrf
                <!--どのユーザーが更新するのかid特定-->
                <!---->
                <input type="text" name="name" placeholder="名前" class="name_area">
              </form>
            </div>
          </div>
          <!--画像説明文-->
          <form action="#" method="#" class="content_form">
            @csrf
            <textarea name="item" rows="3" cols="100%" placeholder="写真説明" class="textarea">ご飯。</textarea>
          </form>
        </div>
        <!--コンテンツboxここまで-->
        <!--複製ここまで-->
      </div>
      <!--innnarのdiv-->

    </div>

    <script src="js/main.js"></script>

  </body>