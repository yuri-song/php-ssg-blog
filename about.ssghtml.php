<?php
require_once "head.php";
?>

<div class="body-content">
  <header class="visible-md-up">
    <div class="top-bar con-min-width">
      <div class="con height-100p flex flex-jc-c flex-ai-c flex-jc-sb">
        <a class="logo">
          <span>💙</span>
          <span>yruong_blog</span>
        </a>
        <nav class="top-bar__menu">
          <ul class="flex">
            <li>
              <a href="./">
                <span><i class="fas fa-home"></i></span>
                <span>HOME</span></a>
            </li>
            <li>
              <a href="">
                <span><i class="fas fa-user"></i></span>
                <span>ABOUT</span></a>
            </li>
            <li><a href="#">
                <span><i class="fas fa-book"></i></span>
                <span>PORTFOLIO</span></a></li>
            <li><a href="#">
                <span><i class="far fa-list-alt"></i></span>
                <span>ARTICLES</span></a></li>
          </ul>
        </nav>

      </div>
    </div>
  </header>
  <!-- 탑바 끝 -->

<!-- 모바일 탑바 시작 -->

  <header class="mobile-top-bar con-min-width visible-sm-down flex">
    <div class="flex flex-1-0-0">
      <div class="mobile-top-bar__btn-toggle-side-bar flex-ai-s">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div>
      <a class="logo height-100p">
        <span>💙</span>
        <span>yrong_blog</span>
      </a>
    </div>
    <div class="flex-1-0-0">
    </div>
  </header>

  <aside class="mobile-side-bar visible-sm-down">
    <nav class="mobile-side-bar__menu-box">
      <ul>
        <li>
          <a href="" class="block">
            <span><i class="fas fa-home"></i></span>
            <span>HOME</span></a>
        </li>
        <li>
          <a href="about.php" class="block">
            <span><i class="fas fa-user"></i></span>
            <span>ABOUT</span></a>
        </li>
        <li><a href="#" class="block">
            <span><i class="fas fa-book"></i></span>
            <span>PORTFOLIO</span></a></li>
        <li>
          <a href="#" class="block">
            <span><i class="far fa-list-alt"></i></span>
            <span>ARTICLES</span></a>
        </li>
      </ul>

    </nav>
  </aside>
  <!-- 모바일 탑바 끝 -->

  <main>
    <section class="section-title con-min-width">
      <h1 class="con">
        <span>
          <i class="fas fa-fire"></i>
        </span>
        <span>
          NOTICE
        </span>
      </h1>
    </section>
<?php
require_once "foot.php";
?>