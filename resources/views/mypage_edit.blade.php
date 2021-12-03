<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('pictlog/css/mypage.edit.css')  }}">
    <link rel="stylesheet" href="{{ ('css/reset.css') }}">
    <!--タイトルフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">

    <title>マイページ編集</title>
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
            <li class="nav_item"><a href="top.html" class="nav_item_a"><img src="{{ asset('pictlog/img/iconhome2.png') }}" class="header_icon_img"></a></li>
            <li class="nav_item"><a href="index.html" class="nav_item_a"><img src="{{ asset('pictlog/img/icon_mypage.png') }}" class="header_icon_img"></a></li>
            <li class="nav_item"><a href="#" class="nav_item_a"><img src="{{ asset('pictlog/img/seting.png') }}" class="header_icon_img"> </a></li>
            <li class="nav_item"><a href="contact.html" class="nav_item_a"><img src="{{ asset('pictlog/img/iconmall3.png') }}" class="header_icon_img"></a></li>
          </ul>
        </nav>
        <!--ナビバーここまで-->
      </header>
      <!--編集画面　画像　名前-->
      <!--この内容をmypage.blade.phpに反映させたい-->
      <div class="my_img_name_box">

        <!--
          画像をアップロードしたい
        -->
        <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="my_img_edit">
            <div class="my_img_box">
              <input type="file" name="profile_img" class="my_img">
            </div>
          </div>
        </form>
        <!--
          画像をアップロードしたいここまで
        -->




        <!--更新内容記入ここから-->

        <!--更新させたい-->
        <!--更新させたい-->
        <!--更新させたい-->
        <!--更新させたい-->
        <!--更新させたい-->
        <!--更新させたい-->
        <div class=" my_name_age">
          <form action="/edit_update/{id}" method="post">
            @csrf
            <!--どのユーザーが更新するのかid特定-->
            <input type="hidden" name="id" value="{{$item->id}}">
            <!--更新したい名前を記入-->
            <input class="name_area" type="text" name="name" placeholder="名前" value="{{$item->name}}">
            <!--送信-->



            <input type="hidden" name="id" value="{{$item->id}}">
            <input class="name_area" placeholder="年齢" type="" name=" age" value="{{$item->age}}">

            <!--ageここまで-->
        </div>
        <!--my_name_ageの閉じdiv-->

        <!--どのユーザーが更新するのかid特定-->
        <input type="hidden" name="id" value="{{$item->id}}">
        <!--自己紹介文記入-->
        <textarea name="profile" rows=" 20" cols="100%" placeholder="自己紹介" class="textarea" value="{{$item->profile}}"></textarea>


        <!--更新させたい-->
        <!--更新させたい-->
        <!--更新させたい-->
        <!--更新させたい-->
        <!--更新させたいここまで-->


      </div>

    </div>
    <!--送信ボタン-->
    <div class="send_btn">
      <input type="submit" value="更新" class="send_button">
    </div>
    </form>
    </div>
    </div>



    <!--後で整理-->
    <p class="sub_item">後で整理</p>
    <!--メール　住所　編集ホーム-->
    <!--この内容は反映させない-->
    <div class="edit_text">
      <label class="label"></label>
      <input type="text" placeholder="住所" name="address" value="#">
    </div>
    <!--この内容は反映させない-->
    <div class="edit_text">
      <label class="label"></label>
      <input type="text" name="email" value="#" placeholder="メールアドレス">
    </div>



  </body>
</thml>