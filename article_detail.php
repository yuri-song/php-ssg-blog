<?php
require_once "head.php";
?>

<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      <i class="fas fa-info"></i>
    </span>
    <span>
      detail
    </span>
  </h1>
</section>
<section class="section-aritcle-detail con-min-width">
  <h1 class="title"><?=$selectedArticle["title"]?></h1>
  <div class="reg-date"><?=$selectedArticle["reg-date"]?></div>
  <div class="reg-writer">

    <span><?=$selectedArticle["writer"]?></span>
    <span>
      <?=$selectedArticle["writerAvatear"]?>
    </span>

  </div>
  <div class="body">
    <script type="text/x-template"><?=$selectedArticle["body"]?></script>
    <div class="toast-ui-viewer"></div>
  </div>
</section>

<?php
require_once "foot.php";
?>

<section class="section-article-detail con-min-width">
  <div class="con">

  </div>
</section>