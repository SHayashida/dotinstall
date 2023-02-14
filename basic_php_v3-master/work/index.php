<?php 

$n = mt_rand(1, 3);

if ($n === 1){
  $message = "I'm on training";
} elseif ($n === 2){
  $message = "Am I in exponential grouth?";
} else {
  $message = 'Today is'. ' ' .date('l');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>lindatech portfolio</title>
  <link rel="icon" href="favicon.ico">
  <meta name="description" content="lindatechのポートフォリオサイトです">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="icon">
        <img src="img/taro.png" width="120" height="120" alt="太郎のアイコンです">
      </div>
      <div class="info">
        <h1>Shunya Hayashida</h1>
        <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
        <ul>
          <li>
            <a href="https://dotinstall.com" target="_blank">
              <img src="img/blog.png" width="20" height="20" alt="ブログサイトへのリンク画像です">
            </a>
          </li>
          <li>
            <a href="https://dotinstall.com" target="_blank">
              <img src="img/photos.png" width="20" height="20" alt="写真サイトへのリンク画像です">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <section class="works">
    <h1>WORKS</h1>
    <section>
      <img src="img/hirameki.png" width="400" height="260" alt="Hiramekiの紹介画像">
      <h1>Hirameki(バグリスト)</h1>
      <h2>Ideate/Product owner</h2>
      <p>「新規事業のアイデアが浮かばない」「ブレインストーミングをしても煮詰まってしまう」「新規事業部を立ち上げたは良いがうまく行かない」こんなことはありませんか？「バグリスト」は一定時間に日常のバグ（悩みや怒り、苦痛に関していること）をひたすら書きなぐる究極のアイデア発想法です。こんなにシンプルなことをするだけで新しいビジネスの核を作ることができます。</p>
      <a herf="https://hirameki.cocolofun.com/buglist/">もっと見る</a>
    </section>
  
    <section>
      <img src="img/bizlean.png" width="400" height="260" alt="BizLean">
      <h1>BizLean</h1>
      <h2>Ideate/Product owner</h2>
      <p>アントレプレナーのための事業創造支援メディアとして、新規事業担当者や起業家を応援するため、新規事業創出の科学的フレームワークを提供しています。</p>
      <a herf="http://bizlean.cocolofun.com/">もっと見る</a>
    </section>
  
    <section>
      <img src="img/work3.png" width="400" height="260" alt="神経衰弱の紹介画像">
      <h1>神経衰弱</h1>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
      <a herf="hero.php">もっと見る</a>
    </section>

  </section>

  <footer>
    <p>(c) dotinstall.com</p>
  </footer>
</body>
</html>
  