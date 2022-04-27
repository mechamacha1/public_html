<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>動的なサイト作り</title>
<meta name="robots" content="noindex,nofollow"><meta name="keywords"  content="">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--=============Google Font ===============-->
<link href="https://fonts.googleapis.com/css?family=Baskervville%7CLa+Belle+Aurore&display=swap" rel="stylesheet">
<!--==============レイアウトを制御する独自のCSSを読み込み===============-->
<!--機能編 6-1-3 ゆっくりズームアウトさせながら全画面で見せる-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
<!--機能編 9-6-3 リンクをクリックすると、背景が暗くなり動画や画像やテキストを表示-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
<!--自作のCSS-->
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/parts.css">
<link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
<body>
 
<div id="splash">
	<div id="splash_text">ただいまロード中</div>
	<div class="loader_cover loader_cover-up"></div>
	<div class="loader_cover loader_cover-down"></div>
</div>

<header id="header">
    <div id="slider">
        <ul id="sns-icon">
        <li><a href="#"><img src="svg/ico_insta.svg" alt="Instagram"></a></li>
        <li><a href="#"><img src="svg/ico_fb.svg" alt="Facebook"></a></li>
        <li><a href="#"><img src="svg/ico_tw.svg" alt="Twitter"></a></li>
        </ul>
    </div>
</header>

<main>
<section id="box1" class="box" data-section-name="IMFORMATION">
        <div class="box-area">
            <div class="profile-area blurTrigger">
                <h2>概要 <span>サイトの説明</span></h2>
                <p>レイアウトを中心に学習を進めています</p>
                <dl>
                    <dt>役割</dt>
                        <dd>第１階層</dd>
                        <dd>第２階層sawada</dd>
                        <dd>第３階層kubo</dd>
                </dl>
            </div>
        </div>
    </section>

    <section id="box2" class="box" data-section-name="SAWADA">
        <div class="box-area">
            <div class="profile-area blurTrigger">
            <h2>SAWADA　<span>ここの先のページに機能を追加していく</span></h2>
            <div style="text-align: center">
                <p><img src= "img/sawada_1.jpg" width = "200" float = 0 auto></p>
            </div>
                <div class="flex">
                    <p>
                        <a href="http://toindeed.php.xdomain.jp/2/index.php" class="a_link-button">SAWADAの道</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<!--
    <section id="box2" class="box" data-secton-name="sawada">
        <div class="box-area">
            <h2 class="eachTextAnime">SAWADA</h2>
            <a href="http://toindeed.php.xdomain.jp/2/index.php" class="gradient4 btn-view blurTrigger">SAWADAの道</a>
        </div>
        <div id="gallery-2" class="hide-area">
        </div>
    </section>
-->
</main>
</body>
<!--=============JS ===============--> 
<!--jQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--機能編 4-1-3プログレスバー＋数字カウントアップ＋画面が開く-->
<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
<!--機能編 6-1-3 ゆっくりズームアウトさせながら全画面で見せる-->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
<!--機能編 9-6-3 リンクをクリックすると、背景が暗くなり動画や画像やテキストを表示-->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
<!--印象編　6-1　スクロールすると1画面移動-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
<!--自作のJS-->
<script src="js/script.js"></script>
</html>