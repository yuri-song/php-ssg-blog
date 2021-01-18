<?php require_once "head.php";
?><section class="section-title con-min-width">
  <h1 class="con"><span><i class="fas fa-info"></i></span><span>detail </span></h1>
</section>
<section class="section-aritcle-detail con-min-width">
  <h1 class="title"><?=$selectedArticle["title"]?></h1>
  <div class="reg-date"><?=$selectedArticle["reg-date"]?></div>
  <div class="reg-writer">
    <span><?=$selectedArticle["writer"]?></span><span><?=$selectedArticle["writerAvatear"]?></span></div>
  <div class="body">
    <script type="text/x-template"><?=$selectedArticle["body"]?></script>
    <div class="toast-ui-viewer"></div>
  </div>
</section><?php require_once "foot.php";

?><section class="section-article-detail con-min-width">
  <div class="con"></div>
</section>
<section class="section-article-reply-box con-min-width">
  <div id="disqus_thread"></div>
  <script>
    var disqus_config = function () {
        this.page.url = 'https://b.yrongs.com/article_detail_<?=$articleId?>.html';
        this.page.identifier = 'aritcle_detail_<?=$articledId?>.html'; >
        ;

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
              var disqus_config = function () {
              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              */
        (function () {
            // DON'T EDIT BELOW THIS LINE
            var d = document,
              s = d.createElement('script');
            s.src = 'https://yurong-phpblog.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          }

        )();
  </script>
</section>