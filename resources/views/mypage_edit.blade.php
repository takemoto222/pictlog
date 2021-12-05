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

      <!--ナビバー-->

      <!--編集画面　画像　名前-->
      <div class="my_img_name_box">

        <!--更新内容記入ここから-->

        <!--更新させたい-->
        <form action="/edit_update/{{ $item->id }}" enctype="multipart/form-data" method="post">
          @csrf
          <!--画像-->
          <div class="my_img_edit">
            <div class="my_img_box">
              @isset($item->image)
              <img src="/storage/{{$item->image}}" name="image" class="my_img">
              @else
              <img src="{{ asset('pictlog/img/cafe_1125.jpg') }}" class="my_img">
              @endisset
            </div>
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="file" name="image">
          </div>
          <!--画像ここまで-->
          <!--以下名前とプロフィール更新-->
          <!--どのユーザーが更新するのかid特定-->
          <input type="hidden" name="id" value="{{$item->id}}">
          <!--更新したい名前を記入-->
          <input class="name_area" type="text" name="name" placeholder="名前" value="{{$item->name}}">
          <!--名前ここまで-->
          <input type="hidden" name="id" value="{{$item->id}}">
          <input class="name_area" placeholder="年齢" type="" name=" age" value="{{$item->age}}">
          <!--ageここまで-->
      </div>
      <!--my_name_ageの閉じdiv-->
      <!--どのユーザーが更新するのかid特定-->
      <input type="hidden" name="id" value="{{$item->id}}">
      <!--自己紹介文記入-->
      <textarea name="profile" rows=" 20" cols="100%" placeholder="自己紹介" class="textarea" value="{{$item->profile}}"></textarea>
    </div>

    </div>
    <!--送信ボタン-->
    <div class="send_btn">
      <input type="submit" value="更新" class="send_button">
    </div>
    </form>
    <!--更新させたい　ここまで-->
    </div>

    </div>



  </body>
</thml>