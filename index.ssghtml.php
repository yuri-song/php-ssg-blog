<?php
require_once "data.php";
require_once "head.php";
?>
<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      <i class="fas fa-fire"></i>
    </span>
    <span>
      LATEST ARTICLES
    </span>
  </h1>
</section>
<!-- 4번 -->

<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="title"><a href="article_detail_6.ssghtml.php"></a><?=$article6["title"]?></h1>
          <div class="reg-date"><?=$article6["reg-date"]?></div>
          <div class="reg-writer">
            <span><?=$article6["writer"]?></span>
            <span>
              <?=$article6["writerAvatear"]?>
            </span>

          </div>

          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article6["body"]?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- 3번-->

<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="title"><a href="article_detail_5.ssghtml.php"></a><?=$article5["title"]?></h1>
          <div class="reg-date"><?=$article5["reg-date"]?></div>
          <div class="reg-writer">
            <span><?=$article5["writer"]?></span>
            <span>
              <?=$article5["writerAvatear"]?>
            </span>

          </div>

          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article5["body"]?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- 2번-->


<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="title"><a href="article_detail_4.ssghtml.php"></a><?=$article4["title"]?></h1>
          <div class="reg-date"><?=$article4["reg-date"]?></div>
          <div class="reg-writer">
            <span><?=$article4["writer"]?></span>
            <span>
              <?=$article4["writerAvatear"]?>
            </span>

          </div>

          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article4["body"]?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- 1번-->
<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="title"><a href="article_detail_3.ssghtml.php"></a><?=$article3["title"]?></h1>
          <div class="reg-date"><?=$article3["reg-date"]?></div>
          <div class="reg-writer">
            <span><?=$article3["writer"]?></span>
            <span>
              <?=$article3["writerAvatear"]?>
            </span>

          </div>

          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article3["body"]?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- 2번 끝-->
<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="title"><a href="article_detail_2.ssghtml.php"><?=$article2["title"]?></h1>
          <div class="reg-date"><?=$article2["reg-date"]?></div>
          <div class="reg-writer">
            <span><?=$article2["writer"]?></span>
            <span>
              <?=$article2["writerAvatear"]?>
            </span>

          </div>

          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article2["body"]?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- 0번 -->
<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="title"><a href="article_detail_1.ssghtml.php"></a><?=$article1["title"]?></h1>
          <div class="reg-date"><?=$article1["reg-date"]?></div>
          <div class="reg-writer">
            <span><?=$article1["writer"]?></span>
            <span>
              <?=$article1["writerAvatear"]?>
            </span>

          </div>

          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article1["body"]?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php
?>

<?php
require_once "foot.php";
?>