<?php get_header(); ?>
<main>
  <div class="l-main">
    <div class="p-visual">
    </div>
    <div class="p-newpost">
      <div class="l-container">
        <section>
          <h2><img src="<?php echo home_url(); ?>/images/tit_index01.png" alt="new post"></h2>
          <div class="u-flex c-new">
            <p class="c-new__img"><a href="/jounal"><img src="images/dummy01.jpg" alt=""></a></p>
            <div class="c-new__text">
              <div class="c-new__textcontents">
                <a href="/jounal">
                  <span class="c-new__date u-opensans"><time datatime="2019.07.28">2019.07.28</time></span>
                  <span class="c-new__title">勇気をくれる本</span>
                </a>
                <p class="c-new__category"><a href="">#小説</a></p>
              </div>
              <p class="c-btn"><a href="<?php echo home_url(); ?>/jounal">READ MORE</a></p>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="p-journal">
      <div class="l-container">
        <section>
          <h3>JOURNAL</h3>
          <ul class="u-flex">
            <?php //ループ開始
              $wp_query = new WP_Query();
              $param = array(
                'posts_per_page' => '3',
                'post_type' => 'works'
              );

              $wp_query->query($param);
              if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <li class="c-post">
              <a href="<?php echo get_permalink(); ?>">
                <span class="c-post__img" style="background:url('<?php the_field('mainpic'); ?>') no-repeat center center; background-size: auto 100%;"></span>
                <span class="c-post__date u-opensans"><time datatime="2019.07.28">2019.07.28</time></span>
              </a>
              <h4><a href="/jounal"><?php?></a></h4>
              <p class="c-post__category"><a href="">#旅行</a></p>
            </li>
            <?php endwhile; endif; //ループ終了 ?>
          </ul>
          <p class="c-btn"><a href="/jounal">ALL POST</a></p>
        </section>
      </div>
    </div>
    <div class="p-photo">
      <div class="c-photocontents">
        <div class="c-photocontents__textbox l-container">
          <h3>PHOTO</h3>
          <p class="c-photocontents__text">日常と旅の記録</p>
          <p class="c-btn"><a href="<?php echo home_url(); ?>/photo">ALL POST</a></p>
        </div>
      </div>
      <p class="p-photo__main"><img src="<?php echo home_url(); ?>/images/pic_index02.jpg" alt=""></p>
    </div>
    <div class="p-about">
      <div class="l-container">
        <div class="u-flex c-profile">
          <p class="c-profile__img"><img src="<?php echo home_url(); ?>/images/dummy01.jpg" alt=""></p>
          <div class="c-profile__info">
            <p class="c-profile__name">aico</p>
            <p class="c-profile__text">滋賀県出身<br>旅行に行くこと、絵を描くこと、動物が好きです。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
