<?php get_header(); ?>
<div class="top-eyecatch">
  <h1 class="media__fv-ttl">
    Portfolio
    <div class="small">Web Engineer</div>
  </h1>
</div>
<main>
  <div class="about">
    <div>
      <div class="about-title">
        <small>ABOUT</small>
        <h2>自己紹介</h2>
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
  <div class="skill">
    <div class=""
  </div>
  <div class="flex">
    <div class="container-top">
      <div class="new-articles">
        <h2 class="section-title">NEW ARTICLES!</h2>
        <div class="flex">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="magazine-colum">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri() ?>/img/no-images.png" alt="no-img">
                <?php endif; ?>
                <?php if (!is_category() && has_category()) : ?>
                  <p class="category-tag">
                    <?php $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                  </p>
                <?php endif; ?>
                <div class="text-content">
                  <h3 class="srticle__title">
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '・・・';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h3>
                  <div class="article-tags">
                    <p class="article-tags__inner">
                      <?php $posttags = get_the_tags();
                      if ($posttags) {
                        foreach ($posttags as $tag) {
                          echo '<span class="tag>' . $tag->name . '</span>';
                        }
                      } ?>
                    </p>
                  </div>
                  <p class="article__date"><?php echo get_the_date('Y-m-d'); ?></p>
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>