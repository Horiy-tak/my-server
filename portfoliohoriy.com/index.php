<!DOCTYPE html>
<html>

<head>
  <?php include './common/gtm.php'; ?>
  <meta charset="utf-8">
  <meta name='robots' content='noindex'>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='Webディレクター TAKAHIRO HORIGOME ポートフォリオ'>
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
  <?php include './common/header.php'; ?>
  <main class="content">
    <!-- mv -->
    <div class="mv">
      <span class="mv-edge-label" aria-hidden="true">PORTFOLIO · 2026 · TOKYO</span>
      <span class="mv-bignum" aria-hidden="true">N°<i>01</i></span>
      <div class="mv-container">
        <div class="mv-meta">
          <span class="mv-meta-label">— Web Director / Tokyo</span>
          <span class="mv-meta-year">MMXXV</span>
        </div>
        <p class="mv-title">TAKAHIRO<br><em>HORIGOME</em>.</p>
        <p class="mv-subtitle">PORTFOLIO ARCHIVE</p>
        <p class="mv-text">過去の対応実績・保有スキルの一部を掲載したポートフォリオサイトです。<br>
          WEB制作・サーバー周りの対応から、話題の生成AIなどの最新技術まで幅広い知見とスキルがあります。<br>
          <br>
          <span class="top_mv">このサイトはAWSで構築しています。</span>
          <br>
        </p>
        <button id="modalOpen" class="link_btn">ネットワーク構成　→</button>
        <div class="video-background">
          <video class="bg_video" autoplay="" loop="" muted="">
            <source src="background/bg.mp4" type="video/mp4">
          </video>


        </div>
      </div>
      <a href="#works" class="mv-scroll" aria-label="scroll">
        <span>SCROLL</span>
        <span class="mv-scroll-line"></span>
      </a>
    </div>
    <!-- /mv -->

    <!-- marquee divider -->
    <div class="marquee" aria-hidden="true">
      <div class="marquee-track">
        <span>WEB DIRECTION</span><span>★</span><span>LANDING PAGE</span><span>★</span><span>UI / UX</span><span>★</span><span>GENERATIVE AI</span><span>★</span><span>AWS / SERVER</span><span>★</span><span>WEB DIRECTION</span><span>★</span><span>LANDING PAGE</span><span>★</span><span>UI / UX</span><span>★</span><span>GENERATIVE AI</span><span>★</span><span>AWS / SERVER</span><span>★</span>
      </div>
    </div>
    <!--
    <section class="anchor">
      <div class="container">
        <div class="top-menu">
          <a class="works-item" href="#works">
            <p class="menu-name"><span>WORKS ↓</p>
          </a>
          <a class="works-item" href="#skill">
            <p class="menu-name">SKILL ↓</p>
          </a>
          <a class="works-item" href="#about">
            <p class="menu-name">ABOUT ↓</p>
          </a>
        </div>
      </div>
    </section>
    -->

    <!-- works -->
    <section class="works section" id="works">
      <div class="container">
        <h2 class="title">WORKS</h2>
        <div class="works-list">
          <a class="works-item" id="lp_link" href="lp/">
            <div class="works-card">
              <span class="w-num">01 / LP</span>
              <div class="w-icon" aria-hidden="true">
                <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="9" y="3.5" width="18" height="29" rx="2"/>
                  <path d="M13 11h10"/>
                  <path d="M13 16h7"/>
                  <path d="M13 21h9"/>
                  <rect x="13" y="25" width="10" height="4" rx="1" fill="currentColor" stroke="none"/>
                </svg>
              </div>
              <div class="w-meta">
                <h3 class="w-title">Landing Page</h3>
                <p class="w-sub">広告・申込・セミナーLPなど</p>
              </div>
            </div>
            <p class="works-name">View detail</p>
          </a>
          <a class="works-item" id="banner_link" href="banner/">
            <div class="works-card">
              <span class="w-num">02 / Banner</span>
              <div class="w-icon" aria-hidden="true">
                <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="10" width="30" height="16" rx="2"/>
                  <path d="M8 17h10"/>
                  <path d="M8 21h6"/>
                  <circle cx="26" cy="18" r="3" fill="currentColor" stroke="none"/>
                </svg>
              </div>
              <div class="w-meta">
                <h3 class="w-title">Banner</h3>
                <p class="w-sub">Web 広告クリエイティブ</p>
              </div>
            </div>
            <p class="works-name">View detail</p>
          </a>
          <a class="works-item" href="web/">
            <div class="works-card">
              <span class="w-num">03 / Web</span>
              <div class="w-icon" aria-hidden="true">
                <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="4" y="6" width="28" height="24" rx="2"/>
                  <path d="M4 12h28"/>
                  <circle cx="8" cy="9" r="0.9" fill="currentColor" stroke="none"/>
                  <circle cx="11" cy="9" r="0.9" fill="currentColor" stroke="none"/>
                  <circle cx="14" cy="9" r="0.9" fill="currentColor" stroke="none"/>
                  <path d="M9 18h18"/>
                  <path d="M9 22h12"/>
                </svg>
              </div>
              <div class="w-meta">
                <h3 class="w-title">Web Site</h3>
                <p class="w-sub">コーポレート / サービスサイト</p>
              </div>
            </div>
            <p class="works-name">View detail</p>
          </a>
          <!--
          <a class="works-item" href="ai/">
            <div class="works-card">
              <span class="w-num">04 / AI</span>
              <div class="w-icon" aria-hidden="true">
                <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 4 L18 14 L28 16 L18 18 L16 28 L14 18 L4 16 L14 14 Z" fill="currentColor" stroke="none"/>
                  <path d="M27 22 L28 26 L32 27 L28 28 L27 32 L26 28 L22 27 L26 26 Z" fill="currentColor" stroke="none" opacity="0.55"/>
                </svg>
              </div>
              <div class="w-meta">
                <h3 class="w-title">Generative AI</h3>
                <p class="w-sub">画像生成・プロンプト設計</p>
              </div>
            </div>
            <p class="works-name">View detail</p>
          </a>
          <a class="works-item" href="movie/">
            <div class="works-card">
              <span class="w-num">05 / Movie</span>
              <div class="w-icon" aria-hidden="true">
                <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="18" cy="18" r="13"/>
                  <path d="M15.5 12.5 L24 18 L15.5 23.5 Z" fill="currentColor" stroke="none"/>
                </svg>
              </div>
              <div class="w-meta">
                <h3 class="w-title">Movie</h3>
                <p class="w-sub">映像編集・モーション制作</p>
              </div>
            </div>
            <p class="works-name">View detail</p>
          </a>
          -->
        </div>
      </div>
    </section>
    <!-- /works -->

    <!-- youtube -->
    <section class="works section" id="works">
      <h2 class="title">Youtube</h2>
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
              <a href="/reaction.pdf" target="_blank" class="link_btn_tube">反響を見る　→</a>
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
    <!-- /youtube -->


    <!-- skill -->
    <section class="skill section" id="skill">
      <div class="skill_margin">
        <div class="skill">
          <div class="container">
            <h2 class="title">AI SKILL</h2>
            <div class="skill-list">
              <div class="skill-item">
                <p class="skill-img"><img src="/img/Claude_AI_symbol.svg" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Claude Code</h3>
                  <p class="skill-text">アプリケーション制作、WEBサイト作成、業務自動化ツール作成。skills、MCPを用いたデザインシステム構築。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/dify.jpg" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Dify</h3>
                  <p class="skill-text">dockerを使用しAWSのCloudServerにデプロイ。AIワークフローの構築。アプリケーション制作。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/antigravity-icon__full-color.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Google Antigravity</h3>
                  <p class="skill-text">アプリケーション制作、WEBサイト作成、業務自動化ツール作成。skills導入。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/google-notebooklm-logo-icon.svg" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Google NotebookLM</h3>
                  <p class="skill-text">プレゼン資料作成、情報整理、商談データサマリー。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/gpt.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">ChatGPT</h3>
                  <p class="skill-text">APIを使用したspreadsheetとの連携/自動化、babyAGI環境の構築。プラグインの導入。プロンプトのテンプレート化、Code Interpreterの利用等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/sd.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Stable Diffusion</h3>
                  <p class="skill-text">ローカル環境でのWEBUI環境の構築。追加学習データ・コントロールネット等拡張機能の導入。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/mj.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Midjourney</h3>
                  <p class="skill-text">プロンプトを用いた画像生成。imgtotext、各種パラメーターの理解。プロンプトエンジニアリング。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="skill">
          <div class="container">
            <h2 class="title">WEB SKILL</h2>
            <div class="skill-list">
              <div class="skill-item">
                <p class="skill-img"><img src="/img/aws.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">AWS</h3>
                  <p class="skill-text">CloudFormationを使用したconversionAPI連携<br>
                    WEBサーバー環境の構築（Apache、php、MySQL、ROUTE53、ELB）<br>
                  </p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/wp.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">WordPress</h3>
                  <p class="skill-text">WEBサーバー上での環境構築。テーマファイルを用いたサイト制作等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/html.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">HTML5/CSS3</h3>
                  <p class="skill-text">WEBページのコーディング、ページ改修等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/js.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">JavaScript</h3>
                  <p class="skill-text">カルーセルやモダール等を含む、部分的な機能の実装。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/25231.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Github</h3>
                  <p class="skill-text">バージョン管理、運用ルール作成、リポジトリ管理。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="skill">
          <div class="container">
            <h2 class="title">DESIN/MOVIE SKILL</h2>
            <div class="skill-list">
              <div class="skill-item">
                <p class="skill-img"><img src="/img/ps.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Photoshop</h3>
                  <p class="skill-text">バナーなど広告関連のクリエイティブ及び、LPやコーポレートサイトなどのページデザイン。画像加工・レタッチ等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/ai.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Illustrator</h3>
                  <p class="skill-text">ベクターデータの編集等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/xd.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">XD</h3>
                  <p class="skill-text">アプリケーションのUI設計、モック制作。ページ数の多いWEBサイト制作の際のワイヤーフレームの作成。画面デザイン等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/figma.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Figma</h3>
                  <p class="skill-text">アプリケーションのUI設計、モック制作。ページ数の多いWEBサイト制作の際のワイヤーフレームの作成。画面デザイン等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/pr.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Premier Pro</h3>
                  <p class="skill-text">aftereffectなどで作成した素材の動画化。音声ファイルの調整を含めた基本的な動画編集。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/ae.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">After Effect</h3>
                  <p class="skill-text">アニメーションの作成。広告クリエイティブの動画化等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/dl.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">DaVinci Resolve</h3>
                  <p class="skill-text">LUTを使用したカラーグレーディング、カラーコレクション。動画連結作業。</p>
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="skill">
          <div class="container">
            <h2 class="title">Data Analysis SKILL</h2>
            <div class="skill-list">
              <div class="skill-item">
                <p class="skill-img"><img src="/img/ga4.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Google Analytics4</h3>
                  <p class="skill-text">アカウントエンゲージメントのフォーム機能を使用したランディングページへのフォーム実装。フォームハンドラーでの情報取得等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/gtm.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Google Tag Manager</h3>
                  <p class="skill-text">ページ作成機能を使用したランディングページの作成。フォーム埋め込み等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/clarity.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Microsoft Clarity</h3>
                  <p class="skill-text">ページ作成機能を使用したランディングページの作成。フォーム埋め込み等。</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="skill">
          <div class="container">
            <h2 class="title">MA SKILL</h2>
            <div class="skill-list">
              <div class="skill-item">
                <p class="skill-img"><img src="/img/ss.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Salesforce</h3>
                  <p class="skill-text">アカウントエンゲージメントのフォーム機能を使用したランディングページへのフォーム実装。フォームハンドラーでの情報取得、MA移管の初期構築。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/hs.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">HubSpot</h3>
                  <p class="skill-text">ページ作成機能を使用したランディングページの作成。フォーム埋め込み等。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/marketo.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Marketo</h3>
                  <p class="skill-text">ページ作成機能を使用したランディングページの作成。プロジェクト作成、Salesforce連携、APIを使用したフォームのカスタマイズ等</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="skill">
          <div class="container">
            <h2 class="title">SOUND SKILL</h2>
            <div class="skill-list">
              <div class="skill-item">
                <p class="skill-img"><img src="/img/so.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Studio One</h3>
                  <p class="skill-text">規格に合わせた音声ファイルのミックスやラウドネスの調整。マスタリング。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/cb.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Cubase</h3>
                  <p class="skill-text">規格に合わせた音声ファイルのミックスやラウドネスの調整。マスタリング。</p>
                </div>
              </div>
              <div class="skill-item">
                <p class="skill-img"><img src="/img/au.png" alt=""></p>
                <div class="skill-body">
                  <h3 class="skill-name">Audition</h3>
                  <p class="skill-text">Premier Proと連携した音声ファイルの最適化。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /skill -->
    <section class="about section" id="about">
      <div class="container">
        <h2 class="title">ABOUT</h2>
        <div class="profile">
          <p class="profile-img">
            <img src="/img/profile.png" alt="">
          </p>
          <div class="profile-body">
            <h2>堀米 貴裕｜WEB director</h2>
            <div class="about_txt">
              <p>
                WEB制作会社、インターネット広告代理店を経て株式会社kubellにて現職です。</br>
                <b>広告出稿に伴うLPやバナーの制作に加え、WEBサイト周りドメインやサーバーなどの運用・保守面も一括して対応</b>しています。<br>
                企画から要件定義に始まるWEB制作の制作進行はもちろん、MAツール連携やサーバー、DNS周辺業務など、サービスの根幹に関わる業務も行っています。<br>
              </p>
              <p>
                クリエイティブ責任者として複数事業部を兼務しつつ、リーダーとして<br><b>教育/マネジメント、外注管理、業務フローの作成、組織体制の構築、Youtubeチャンネルの運営/出演</b>など、マネジメント業務も幅広く行っています。
              </p>
              <p>
                また、<b>最新のAI技術もいち早く導入</b>し、クリエイティブ制作への活用、業務の効率化なども推進しています。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /about -->
  </main>

  <!-- footer -->
  <footer class="footer">
    <div class="copyright">&copy;TAKAHIRO HORIGOME</div>
  </footer>
  <!-- /footer -->

  </div>

  <!-- Modal: kept outside .mv stacking context so it overlays the header -->
  <div id="easyModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <img src="/img/network.jpg" alt="AWS">
        <span class="modalClose">×</span>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type='text/javascript' src="js/script.js"></script>


  <script>
    const buttonOpen = document.getElementById('modalOpen');
    const modal = document.getElementById('easyModal');
    const buttonClose = document.getElementsByClassName('modalClose')[0];

    buttonOpen.addEventListener('click', modalOpen);

    function modalOpen() {
      modal.style.display = 'block';
    }

    buttonClose.addEventListener('click', modalClose);

    function modalClose() {
      modal.style.display = 'none';
    }

    addEventListener('click', outsideClose);

    function outsideClose(e) {
      if (e.target == modal) {
        modal.style.display = 'none';
      }
    }
  </script>
</body>

</html>