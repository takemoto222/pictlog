<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/sineup.css')  }}">
    <link rel="stylesheet" href="{{ ('css/reset.css') }}">
    <title>新規会員登録</title>
  </head>

  <body>
    <main class="inner_box_wrapper">
      <header class="header_list">

        <h1 class="h1_ttl">編集</h1>
        <nav class="header_nav">
          <ul class="nav_list">
            <li class="li"><a href="/index" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_112120_256.png') }}" class="img_icon"></a>
            </li>
            <li class="li"><a href="/mypage" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_150030_256.png') }}" class="img_icon"></a>
            </li>
          </ul>
        </nav>
      </header>

      <!--編集画面　画像　名前-->
      <!--この内容をmypage.blade.phpに反映させたい-->
      <div class="my_img_name_box">
        <div class="my_img_edit">
          <div class="my_img_box">
            <img src="{{}}" alt="イメージ" class="my_img">
          </div>
        </div>
        <!--検索スペース-->
        <form action="/" method="post">
          @csrf
          <input type="text" name="name" placeholder="名前">
          <input type="submit" value="更新">
        </form>

      </div>

      <!--自己紹介 テキストエリア-->
      <!--この内容をmypage.blade.phpに反映させたい-->
      <div class="pro_textarea_box">
        <form class="pro_textarea" action="" method="">
          <textarea name="profile" name="profile" rows="20" clos="100%" placeholder="自己紹介文" class="profile_area"></textarea>
          <!--メール　住所　編集ホーム-->
          <!--この内容は反映させない-->
          <div class="edit_text">
            <label class="label"></label>
            <input type="text" placeholder="住所" name="address">
          </div>
          <!--この内容は反映させない-->
          <div class="edit_text">
            <label class="label"></label>
            <input type="text" name="email" placeholder="メールアドレス">
          </div>
          <!--送信-->
          <!--送信した内容をmypage.blade.phpに反映させたい-->
          <div class="btn">
            <a href="/mypage_comp" class="send_button_a"><input type="submit" value="登録"> </a>
          </div>
        </form>
      </div>
    </main>
  </body>
</thml>