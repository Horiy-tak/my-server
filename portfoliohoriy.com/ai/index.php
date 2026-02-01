<!DOCTYPE html>
<html>

<head>
  <?php include '../common/gtm.php'; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <meta name="robots" content="noindex, nofollow">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='WebデザイナーTAKAHIRO HORIGOME ポートフォリオ'>
  <meta property='og:url' content='https://portfoliohoriy.com/'>
  <meta property='og:description' content='TAKAHIRO HORIGOMEのポートフォリオサイトです。'>
  <meta property="og:image" content="/img/ogp.png">
  <meta name="description" content="TAKAHIRO HORIGOMEのポートフォリオサイトです" />
  <title>TAKAHIRO HORIGOME ポートフォリオ</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <link href="/css/ress.css" media="all" rel="stylesheet" type="text/css" />
  <link href="/css/style.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="/img/favicon.ico" />
  <link rel=”canonical” href=”URLが入る” />
</head>

<body>
  <div class="wrapper">
    <?php include '../common/header.php'; ?>
    <main class="content">
      <div class="underlaye_mv">
        <p class="mv-title">AI</p>
        <!-- <p class="mv-subtitle">AIで生成した作品の一部を紹介します</p> -->
      </div>

      <section class="works section" id="works">
      <!-- <h2 class="title">Youtube</h2> -->
      <div class="youtube-pic">
        <div class="pic-left">
          <div class="youtube-item">
            <div class="works-img">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/cPgHBf8pFhE?si=aYwkgI66tG8CNZZ2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="pic-right">
          <div class="">
            <div class="profile-body">
              <h2>Stable DiffusionをMacOSに実装</h2>
              <div class="about_txt">
                <p>
                  基本的にWindows環境に実装することが前提のStable Diffusion。<br>
                  そんな中、MacOSに実装する方法をYouTubeで紹介しました。<br>
                  2023年の動画公開当時、日本語のドキュメントが全くといっていいほど出回っていない中、いち早く情報をキャッチアップし実装。<br>
                  ノウハウを公開しました。
                </p>
              </div>
              <a href="/reaction.pdf" target="_blank">
                <button id="modalOpen" class="link_btn_tube">反響を見る　→</button></a>
              <div id="easyModal" class="modal">
                <div class="modal-content">
                  <!--<div class="modal-header">
                      <img src="/img/netwog" alt="AWS">
                      <span class="modalClose">×</span>
                    </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="youtube">
        <div class="youtube-item">
          <div class="works-img">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-lm6UCbUMEo?si=lxQDT2RQegPWMCln" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
        <div class="youtube-item">
          <div class="works-img">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/BZgbuo_0ItM?si=8RI65lRQsrYVvV48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>


      <!-- <div class="banner_bg">
        <img src="/img/ai/ai_pc.jpg" alt="" class="pc">
        <img src="/img/ai/ai_sp.jpg" alt="" class="sp">
        </article>
      </div> -->
      <!--  <div class="page-top" id="js-page-top">
        <span class="material-icons-outlined">expand_less</span>
      </div>-->
    </main>

    <!-- footer -->
    <footer class="footer">
      <div class="copyright">&copy;TAKAHIRO HORIGOME</div>
    </footer>
    <!-- /footer -->

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type='text/javascript' src="js/script.js"></script>
</body>

</html>