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
    <!--インナーボックス-->
    <div class="inner-box">
      <!--トップビュー-->

      <div class="main_inner">
        @foreach ($posts as $post)
        <!--投稿されたコンテンツ 箱-->
        <div class="content_box">
          <!--表示部分-->
          <!--Postからimage取得-->
          <div class="content_main_imgarea">
            <a href="{{ route('item_scr', ['id'=>$post['id']]) }}"><img src="/storage/image/{{$post->image}}" class="main_img"></a>
          </div>


          <!--ユーザー表示部分-->
          <div class="content_name_box">
            <!--ユーザーアイコン画像-->
            <div class="name_img_box">
              <a href="/{{$post->user_id}}"><img src="/storage/image/{{$post->user->image}}" class="name_img"></a>
            </div>
            <!--名前-->
            <div class="name_box">
              <p class="name_area"> {{$post->user->name}}</p>
            </div>
          </div>
          <!--投稿文-->
          <div class="textarea">
            <p>{{$post->content}}</p>
          </div>
        </div>
        <!--投稿されたコンテンツ 箱 一区切り-->
        @endforeach
        <!--ページネーション記述-->
        {{ $page->links('pagination::bootstrap-4') }}


      </div>
      <!--インナーボックス-->


    </div>


    </div>


  </body>