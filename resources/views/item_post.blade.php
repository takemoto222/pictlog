<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{ asset('pictlog/css/item.post.css') }}">
    <link rel="stylesheet" href="{{ asset('pictlog/css/reset.css') }}">
    <!--タイトルフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">
    <!--横スライド-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>投稿画面</title>
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
    <!--全体の箱-->
    <div class="main_inner">
      <!--投稿する画像を貼る-->

      <div class="post_inner">
        <!--form-->
        <form action="/item_add" method="post" class="post_form">
          @csrf
          <!--画像-->
          <ul class="img_list">
            <li class="img_li">
              <img src="#" alt="画像" class="post_img">
            </li>
            <li class="img_li">
              <img src="#" alt="画像" class="post_img">
            </li>
            <li class="img_li">
              <img src="#" alt="画像" class="post_img">
            </li>
            <li class="img_li">
              <img src="#" alt="画像" class="post_img">
            </li>
            <li class="img_li">
              <img src="#" alt="画像" class="post_img">
            </li>
          </ul>
          <!--投稿文-->
          <textarea name="describe" rows="20" cols="100%" placeholder="投稿文" class="textarea"><input type="text" name="content"></textarea>
          <input type="submit" name="" value="投稿" class="send_button">
        </form>
      </div>
    </div>
  </body>
</thml>