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
          <li class="nav_item"><a href="/login" class="nav_item_a">ログイン</a></li>
          <li class="nav_item"><a href="/register" class="nav_item_a">会員登録</a></li>

        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>
    <!--インナーボックス-->




    <div class="main_inner">
      <!--コンテンツ　箱-->
      <!--インナーボックス-->
      <div class="inner-box">
        @foreach ($posts as $post)
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
              <img src="/storage/image/{{$post->user->image}}" class="name_img">
            </div>
            <!--名前-->
            <div class="name_box">
              <p class="name_area">{{$post->user->name}}</p>
            </div>
          </div>
          <!--投稿文-->
          <div class="textarea">
            <p>{{$post->content}}</p>
          </div>
        </div>
        <!--投稿されたコンテンツ 箱 一区切り-->
        @endforeach



      </div>
      <!--インナーボックス-->
      <!--コンテンツboxここまで-->
      <!--以下複製-->
    </div>
    <!--innarのdiv-->

    </div>


  </body>