<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="description" content="どこかの208号室の日記です。">
  <meta name="keywords" content="">
  <title>#208</title>
  <link rel="stylesheet" href="<?php echo home_url(); ?>/common/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="l-header">
      <div class="p-headercontents u-flex">
        <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo home_url(); ?>/common/images/logo_common01.png" alt="#208"></a></h1>
        <div class="p-spmenu u-sp" id="spmenubtn">
          <p class="c-spbtn">
            <span></span>
            <span></span>
            <span></span>
          </p>
        </div>
        <nav>
          <div class="c-spheadermenu" id="menu">
            <p class="c-spheadermenu__menulogo u-sp"><img src="<?php echo home_url(); ?>/common/images/logo_common01.png" alt="#208"></p>
            <ul class="p-headermenu u-flex">
              <li><a href="<?php echo home_url('/'); ?>">HOME<span class="p-headermenu__subja u-sp">ホーム</span></a></li>
              <li><a href="<?php echo home_url('/'); ?>#">ABOUT<span class="p-headermenu__subja u-sp">208号室</span></a></li>
              <li><a href="<?php echo home_url(); ?>/jounal">JOURNAL<span class="p-headermenu__subja u-sp">記事</span></a></li>
              <li><a href="<?php echo home_url(); ?>/photo">PHOTO<span class="p-headermenu__subja u-sp">写真</span></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
<?php wp_head(); ?>
