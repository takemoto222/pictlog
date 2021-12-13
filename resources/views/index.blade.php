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

            <li class="nav_item"><a href="/index/{id}" class="nav_item_a"><img src="{{ asset('pictlog/img/icon_mypage.png') }}" class="header_icon_img"></a></li>

            <li class="nav_item"><a href="/mypage_edit/1" class="nav_item_a"><img src="{{ asset('pictlog/img/seting.png') }}" class="header_icon_img"> </a></li>

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
                <img src="{{Storage::url($item->image)}}" name="image" class="top_my_img">
                @else
                <img src="{{ asset('pictlog/img/cafe_1125.jpg') }}" class="top_my_img">
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
              <input type="text" name="name" value="{{$item->name}}" class="name_area">
              <!--どのユーザーが更新するのかid特定-->
              <input type="hidden" name="id" value="{{$item->id}}">
              <!--自己紹介文記入-->
              <textarea name="profile" rows="6" cols="60%" placeholder="自己紹介" class="textarea">{{$item->profile}}</textarea>
          </div>
          </form>
          <!--更新させたいここまで-->
        </div>
      </div>








    </div>

    <script src="{{ asset('pictlog/js/main.js') }}"></script>

  </body>