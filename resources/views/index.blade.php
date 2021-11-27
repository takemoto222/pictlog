<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('pictlog/css/style.css')}">
    <link rel="stylesheet" href="{{asset('pictlog/css/reset.css')}">
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
            <li class="nav_item"><a href="top.html" class="nav_item_a"><img src="img/iconhome2.png" class="header_icon_img"></a></li>
            <li class="nav_item"><a href="index.html" class="nav_item_a"><img src="img/icon_mypage.png" class="header_icon_img"></a></li>
            <li class="nav_item"><a href="#" class="nav_item_a"><img src="img/seting.png" class="header_icon_img"> </a></li>
            <li class="nav_item"><a href="contact.html" class="nav_item_a"><img src="img/iconmall3.png" class="header_icon_img"></a></li>
          </ul>
        </nav>
        <!--ナビバーここまで-->
      </header>

      <!--トップビュー-->
      <div class="top">
        <div class="top_inner">
          <div class="top_my_img_area">
            <div class="topimg_box">
              <img src="img/cafe_1125.jpg" class="top_my_img">
            </div>
          </div>
          <div class="toptext_area">
            <!--フォローフォロワー数-->
            <form action="" method="" class="follow_form">
              <label class="follow_number">follow</label>
              <label class="follow_number">follower</label>
            </form>
            <!--名前、プロフィール-->




            <!--更新させたい-->
            <form action="/update/{id}" method="get" class="form_area">
              <!--どのユーザーが更新するのかid特定-->
              <input type="hidden" name="id" value="{{$item->id}}">
    <input type="text" name="name" placeholder="名前" class="name_area">
    <!--どのユーザーが更新するのかid特定-->
    <input type="hidden" name="id" value="{{$item->id}}">
    <!--自己紹介文記入-->
    <textarea name="profile" rows="6" cols="60%" placeholder="自己紹介" class="textarea"><!--{{$item->profile}}--></textarea>
    </form>






    </div>
    </div>
    </div>
    <!--メイン-->
    <main class="main">
      <div class="main_inner">
        <!--タブ-->
        <div class="tab">
          <ul class="tab-menu">
            <li class="tab-menu__item active">
              <img src="img/camera_icon2.png" class="icon_img">
            </li>
            <li class="tab-menu__item">
              <img src="img/like128.png" class="icon_img">
            </li>
            <li class="tab-menu__item">
              <img src="img/seting.png" class="icon_img">
            </li>
          </ul>
          <!--コンテンツ全体-->
          <div class="tab-content">
            <!--コンテンツ内１-->
            <div class="tab-content__item show">
              <p class="my_postlist">投稿</p>
              <div class="content1_inenr">
                <!--一区切り-->
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="item.html"><img src="img/food_1125.jpg" class="content1_img"></a>
                  </div>
                </div>
                <!--以下複製-->
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/food_1125_4.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_3.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/foagra2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/food_1125_4.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/food_1125.jpg" class="content1_img"></a>
                  </div>
                </div>
                <!--上複製-->
              </div>
            </div>
            <!--コンテンツ内2-->
            <div class="tab-content__item">
              <p class="my_likelist">いいねした投稿</p>
              <!--コンテンツ1コピー-->
              <div class="content1_inenr">
                <!--一区切り-->
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/kawa3.jpg" class="content1_img"></a>
                  </div>
                </div>
                <!--以下複製-->
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/iseebi2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/meet1227.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/tasai2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/momonga1.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_3.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <div class="content1_box">
                  <div class="content1_img_area">
                    <a href="posted.photo.html"><img src="img/susi_1125_2.jpg" class="content1_img"></a>
                  </div>
                </div>
                <!--上複製-->
              </div>
              <!--コンテンツ１コピー-->
            </div>
            <!--コンテンツ内3-->
            <div class="tab-content__item">
              <p class="my_seting">設定</p>
            </div>
          </div>
        </div>
        <!--タブここまで-->
      </div>

    </main>
    </div>

    <button class="scroll-top" id="button">↑</button>
    <script src="js/main.js"></script>
    <script src="js/scroll.js"></script>
    </body>