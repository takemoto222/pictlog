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
          <li class="nav_item"><a href="/index/{id}" class="nav_item_a"><img src="{{ asset('pictlog/img/icon_mypage.png') }}" class="header_icon_img"></a></li>
          <li class="nav_item"><a href="/mypage_edit/{id}" class="nav_item_a"><img src="{{ asset('pictlog/img/seting.png') }}" class="header_icon_img"> </a></li>
          <li class="nav_item"><a href="/contact" class="nav_item_a"><img src="{{ asset('pictlog/img/iconmall3.png') }}" class="header_icon_img"></a></li>
        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>
    <!--インナーボックス-->
    <div class="inner-box">
      <!--トップビュー-->



      <div class="main_inner">
        <!--コンテンツ　箱-->
        <div class="content_box">
          <div class="content_main_imgarea">
            <img src="img/niku_1127.jpg" class="main_img">
          </div>
          <!--ユーザー表示部分-->
          <div class="content_name_box">
            <!--トップ画像-->
            <div class="name_img_box">
              <img src="img/meet1.jpg" class="name_img">
            </div>
            <div class="name_box">
              <!--名前、プロフィール-->
              <form action="" method="" class="form_area">
                <!--どのユーザーが更新するのかid特定-->
                <input type="hidden" name="id" value="{{$item->id}}">
                <input type="text" name="name" placeholder="名前" class="name_area">
              </form>
            </div>
          </div>
          <!--画像説明文-->
          <form action="#" method="#" class="content_form">
            <textarea name="item" rows="3" cols="100%" placeholder="自己紹介" class="textarea">ご飯。<!--{{$item->profile}}--></textarea>
          </form>
        </div>
        <!--コンテンツboxここまで-->

        <!--以下複製-->

        <!--コンテンツ　箱-->
        <div class="content_box">
          <div class="content_main_imgarea">
            <img src="img/kawa2.jpg" class="main_img">
          </div>
          <!--ユーザー表示部分-->
          <div class="content_name_box">
            <!--トップ画像-->
            <div class="name_img_box">
              <img src="img/kawa3.jpg" class="name_img">
            </div>
            <div class="name_box">
              <!--名前、プロフィール-->
              <form action="" method="" class="form_area">
                <!--どのユーザーが更新するのかid特定-->
                <input type="hidden" name="id" value="{{$item->id}}">
                <input type="text" name="name" placeholder="名前" class="name_area">
              </form>
            </div>
          </div>
          <!--画像説明文-->
          <form action="#" method="#" class="content_form">
            <textarea name="item" rows="3" cols="100%" placeholder="自己紹介" class="textarea">川にいきました！</textarea>
          </form>
        </div>
        <!--コンテンツboxここまで-->
        <!--コンテンツ　箱-->
        <div class="content_box">
          <div class="content_main_imgarea">
            <img src="img/yasai1.jpg" class="main_img">
          </div>
          <!--ユーザー表示部分-->
          <div class="content_name_box">
            <!--トップ画像-->
            <div class="name_img_box">
              <img src="img/meet1.jpg" class="name_img">
            </div>
            <div class="name_box">
              <!--名前、プロフィール-->
              <form action="" method="" class="form_area">
                <!--どのユーザーが更新するのかid特定-->
                <input type="hidden" name="id" value="{{$item->id}}">
                <input type="text" name="name" placeholder="名前" class="name_area">
              </form>
            </div>
          </div>
          <!--画像説明文-->
          <form action="#" method="#" class="content_form">
            <textarea name="item" rows="3" cols="100%" placeholder="自己紹介" class="textarea">鉄板焼き</textarea>
          </form>
        </div>
        <!--コンテンツboxここまで-->
        <!--複製ここまで-->
      </div>
      <!--innnarのdiv-->

    </div>

    <button class="scroll-top" id="button">↑</button>
    <script src="js/main.js"></script>
    <script src="js/scroll.js"></script>
  </body>