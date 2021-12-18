<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('pictlog/css/logout.top.css') }}">
    <link rel="stylesheet" href="{{ asset('pictlog/css/reset.css') }}">
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
      <form action="#" method="">
        <input type="text" name="#" placeholder="検索" class="seach_space">
        <input type="submit" class="seach_button">
      </form>
      <!--ナビバー-->
      <nav class="nav">
        <ul class="nav_list">
          <li class="nav_item"><a href="login.html" class="nav_item_a">ログイン</a></li>
          <li class="nav_item"><a href="register.html" class="nav_item_a">会員登録</a></li>

        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>
    <!--インナーボックス-->
    <div class="inner-box">




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
                @csrf
                <!--どのユーザーが更新するのかid特定-->
                {{--<input type="hidden" name="id" value="{{$item->id}}">--}}
                {{-- <input type="text" name="name" placeholder="名前" class="name_area">--}}
              </form>
            </div>
          </div>
          <!--画像説明文-->
          <form action="#" method="#" class="content_form">
            @csrf
            <textarea name="item" rows="3" cols="100%" placeholder="自己紹介" class="textarea">ご飯</textarea>
          </form>
        </div>
        <!--コンテンツboxここまで-->

        <!--以下複製-->

      </div>
      <!--innnarのdiv-->

    </div>

    <button class="scroll-top" id="button">↑</button>
    <script src="js/main.js"></script>
    <script src="js/scroll.js"></script>
  </body>