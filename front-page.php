<?php get_header(); ?>
<div class="top-eyecatch">
  <h1 class="media__fv-ttl">
    Portfolio
    <div class="small">Web Engineer</div>
  </h1>
</div>
<main>
  <div class="about" id="about">
    <div>
      <div class="content-title">
        <h2>ABOUT</h2>
      </div>
      <div class="profile flex-2">
        <div class="profile-img">
          <p><?php echo get_avatar(get_the_author('id'), 85); ?></p>
        </div>
        <div class="profile-detail">
          <ul>
            <li>名前：吉川　哲生</li>
            <li>出身：兵庫県</li>
            <li>特技：ラテアート</li>
          </ul>
          <p class="text">はじめまして。平成9年生まれ24歳エンジニアのてつおと申します。大手電機メーカーで、製造課として働いていた経歴があり、ものづくりは昔から大好きです。社内大会で、近畿地方3位まで行き、技術指導者として、東京で勤めたこともあります。モノづくりを通して新しい技術を生み出せればと思いエンジニアになりました。
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="skill" id="skill">
    <div class="content-title">
      <h1>SKILL</h1>
    </div>
    <div class="skill-box flex-2">
      <div class="skill-card flex-2">
        <div class="skill-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/HTML.png">
        </div>
        <div class="skill-desc">
          <h3>HTML</h3>
          <div class="rating">
            ★★★★☆
          </div>
        </div>
      </div>
      <div class="skill-card flex-2">
        <div class="skill-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/CSS.png">
        </div>
        <div class="skill-desc">
          <h3>CSS</h3>
          <div class="rating">
            ★★★★☆
          </div>
        </div>
      </div>
      <div class="skill-card flex-2">
        <div class="skill-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/js-icon.png">
        </div>
        <div class="skill-desc">
          <h3>Vue.js /JavaScript</h3>
          <div class="rating">
            ★★★★★
          </div>
        </div>
      </div>
      <div class="skill-card flex-2">
        <div class="skill-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/PHP.png">
        </div>
        <div class="skill-desc">
          <h3>Laravel/PHP</h3>
          <div class="rating">
            ★★★★★
          </div>
        </div>
      </div>
      <div class="skill-card flex-2">
        <div class="skill-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/Netlify.png">
        </div>
        <div class="skill-desc">
          <h3>Netlify</h3>
          <div class="rating">
            ★★★☆☆
          </div>
        </div>
      </div>
      <div class="skill-card flex-2">
        <div class="skill-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/Heroku.png">
        </div>
        <div class="skill-desc">
          <h3>Heroku</h3>
          <div class="rating">
            ★★★☆☆
          </div>
        </div>
      </div>
      <div class="skill-card flex-2">
        <div class="skill-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/SQL.png">
        </div>
        <div class="skill-desc">
          <h3>DB（MySQL）</h3>
          <div class="rating">
            ★★★★☆
          </div>
        </div>
      </div>
      <div class="skill-card flex-2">
        <div class="skill-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/wp-icon.png">
        </div>
        <div class="skill-desc">
          <h3>WordPress</h3>
          <div class="">
            ★★★★☆
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="portfolio" id="portfolio">
    <div class="content-title">
      <h1>Portfolio</h1>
    </div>
    <div class="flex-2">
      <div class="portfolio-card">
        <a href="https://rese-site.netlify.app/" class="portfolio-colum">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/rese.png">
          <p class="portfolio-tag">
            飲食店予約サイト
          </p>
          <div class="portfolio-tags">
            <p class="portfolio-tags__inner">
              フロントエンド:HTML,CSS,JavaScript（Vue.js）
              <br>
              バックエンド:PHP（Laravel）
              <br>
              作成期間:2カ月
              <br>
              <a>github:</a>
              <a class="github" href="https://github.com/TetsuoYoshikawa/Rese">フロントエンド</a>
              <br>
              github:
              <a class="github" href="https://github.com/TetsuoYoshikawa/Rese-api">バックエンド</a>
            </p>
          </div>
        </a>
      </div>
      <div class="portfolio-card">
        <a href="https://rese-site.netlify.app/" class="portfolio-colum">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/rese.png">
          <p class="portfolio-tag">
            飲食店予約サイト
          </p>
          <div class="portfolio-tags">
            <p class="portfolio-tags__inner">
              フロントエンド:HTML,CSS,JavaScript（Vue.js）
              <br>
              バックエンド:PHP（Laravel）
              <br>
              作成期間:2カ月
              <br>
              <a>github:</a>
              <a class="github" href="https://github.com/TetsuoYoshikawa/Rese">フロントエンド</a>
              <br>
              github:
              <a class="github" href="https://github.com/TetsuoYoshikawa/Rese-api">バックエンド</a>
            </p>
          </div>
        </a>
      </div>
      <div class="portfolio-card">
        <a href="https://rese-site.netlify.app/" class="portfolio-colum">
          <img src="<?php echo get_template_directory_uri(); ?>/img2/rese.png">
          <p class="portfolio-tag">
            飲食店予約サイト
          </p>
          <div class="portfolio-tags">
            <p class="portfolio-tags__inner">
              フロントエンド:HTML,CSS,JavaScript（Vue.js）
              <br>
              バックエンド:PHP（Laravel）
              <br>
              作成期間:2カ月
              <br>
              <a>github:</a>
              <a class="github" href="https://github.com/TetsuoYoshikawa/Rese">フロントエンド</a>
              <br>
              github:
              <a class="github" href="https://github.com/TetsuoYoshikawa/Rese-api">バックエンド</a>
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
