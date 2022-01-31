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
          <!--マイページ編集リンク-->
          <li class="nav_item"><a href="{{route('mypage_edit', ['id' => $id->id])}}" class="nav_item_a"><img src="{{ asset('pictlog/img/seting.png') }}" class="header_icon_img"> </a></li>

          <li class="nav_item"><a href="/contact" class="nav_item_a"><img src="{{ asset('pictlog/img/iconmall3.png') }}" class="header_icon_img"></a></li>

          <!--ログアウト-->
          <li class="nav_item">
            <form method="POST" action="{{ route('logout') }}" nav_item>
              @csrf
              <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                <img src="{{ asset('pictlog/img/icon_login.png') }}" class="header_icon_img">
              </button>
            </form>
          </li>
        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>
    <!--インナーボックス-->
    <div class="inner-box">
      <!--トップビュー-->

      <div class="main_inner">
        @foreach($posts as $post)
        <!--投稿されたコンテンツ 箱-->
        <div class="content_box">
          <!--表示部分-->
          <!--Postからimage取得-->
          <div class="content_main_imgarea">
            <img src="/storage/image/{{$post->image}}" class="main_img">
          </div>


          <!--ユーザー表示部分-->
          <div class="content_name_box">
            <!--ユーザーアイコン画像-->
            <div class="name_img_box">
              <img src="{{ asset('storage/image/' . $post->image) }}" name="image" value="{{$post->image}}" class="name_img">
            </div>
            <!--名前-->
            <div class="name_box">
              <p class="name_area">{{$post->user}} </p>
            </div>
            <!--投稿文-->
            <!--<div class="textarea">
            <p></p>
          </div>-->

          </div>
          <!--投稿されたコンテンツ 箱 一区切り-->
        </div>
        <!--インナーボックス-->
        @endforeach
        <!--zenntai全体箱-->



        <!--コンテンツboxここまで-->

        <!--以下複製-->



        <!--複製ここまで-->
      </div>
      <!--innnarのdiv-->

    </div>

    <script src="js/main.js"></script>

  </body>