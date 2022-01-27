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
          <li class="nav_item"><a href="/{$id}" class="nav_item_a"><img src="{{ asset('pictlog/img/icon_mypage.png') }}" class="header_icon_img"></a></li>
        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>
    <!--全体の箱-->




    <div class="main_inner">
      <!--投稿する画像を貼る-->

      <div class="post_inner">
        <!--form-->

        <form action="/item_add" method="post" class="post_form" enctype="multipart/form-data">
          @csrf
          <!--画像-->
          @isset($photo->image)
          <img src="/storage/{{$photo->image}}" name="image" class="post_image">
          @else
          <img src="{{ asset('pistlog/img/noimage.png') }}">
          @endisset
          <ul class="img_list">
            <li class="img_li">
              <img id="preview1" class="test_img">
              <input type="file" class="post_img" id="myImage1" accept="image/*" name="image" multiple>

            </li>

            <li class="img_li">
              <img id="preview2" class="test_img">
              <input type="file" class="post_img" id="myImage2" accept="image/*" name="image2" multiple>

            </li>
            <li class="img_li">
              <img id="preview3" class="test_img">
              <input type="file" class="post_img" id="myImage3" accept="image/*" name="image3" multiple>

            </li>
            <li class="img_li">
              <img id="preview4" class="test_img">
              <input type="file" class="post_img" id="myImage4" accept="image/*" name="image4" multiple>

            </li>
            <li class="img_li">
              <img id="preview5" class="test_img">
              <input type="file" class="post_img" id="myImage5" accept="image/*" name="image5" multiple>

            </li>

          </ul>
          <!--投稿文-->
          <textarea rows="15" cols="100%" placeholder="投稿文" name="content" class="textarea"></textarea>
          <input type="submit" value="投稿" class="send_button">

        </form>

      </div>
      <script src="{{ asset('pictlog/js/item.post.js') }}"></script>

    </div>
  </body>
</thml>