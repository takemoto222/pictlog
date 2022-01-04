<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('pictlog/css/contact.css') }}">
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
          <li class="nav_item"><a href="top.html" class="nav_item_a"><img src="img/iconhome2.png" class="header_icon_img"></a></li>
          <li class="nav_item"><a href="index.html" class="nav_item_a"><img src="img/icon_mypage.png" class="header_icon_img"></a></li>
          <li class="nav_item"><a href="mypage.edit.html" class="nav_item_a"><img src="img/seting.png" class="header_icon_img"> </a></li>
          <li class="nav_item"><a href="contact.html" class="nav_item_a"><img src="img/iconmall3.png" class="header_icon_img"></a></li>
        </ul>
      </nav>
      <!--ナビバーここまで-->
    </header>

    <div class="Form">
      <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
        <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
        <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
        <textarea class="Form-Item-Textarea"></textarea>
      </div>
      <div class="Btn-box">
        <input type="submit" class="Form-Btn" value="送信する">
      </div>
    </div>


  </body>
</thml>