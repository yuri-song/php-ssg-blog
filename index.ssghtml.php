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
              <h1 class="title"><?=$aritcle6["title"]?></h1>
              <div class="reg-date"><?=$aritcle6["reg-date"]?></div>
              <div class="reg-writer">
                <span><?=$aritcle6["writer"]?></span>
                <span>
                <?=$aritcle6["writerAvatear"]?>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template"><?=$aritcle6["body"]?></script>
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
              <h1 class="title"><?=$aritcle5["title"]?></h1>
              <div class="reg-date"><?=$aritcle5["reg-date"]?></div>
              <div class="reg-writer">
                <span><?=$aritcle5["writer"]?></span>
                <span>
                <?=$aritcle5["writerAvatear"]?>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template"><?=$aritcle5["body"]?></script>
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
              <h1 class="title"><?=$aritcle4["title"]?></h1>
              <div class="reg-date"><?=$aritcle4["reg-date"]?></div>
              <div class="reg-writer">
                <span><?=$aritcle4["writer"]?></span>
                <span>
                <?=$aritcle4["writerAvatear"]?>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template"><?=$aritcle4["body"]?></script>
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
              <h1 class="title"><?=$aritcle3["title"]?></h1>
              <div class="reg-date"><?=$aritcle3["reg-date"]?></div>
              <div class="reg-writer">
                <span><?=$aritcle3["wirter"]?></span>
                <span>
                <?=$aritcle3["writerAvatear"]?>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template"><?=$aritcle3["body"]?></script>
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
              <h1 class="title"><a href="article_detail_2.ssghtml.php"><?=$aritcle2["title"]?></h1>
              <div class="reg-date"><?=$aritcle2["reg-date"]?></div>
              <div class="reg-writer">
                <span><?=$aritcle2["writer"]?></span>
                <span>
                <?=$aritcle2["writerAvater"]?>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template"><?=$aritcle2["body"]?></script>
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
              <h1 class="title"><a href="article_detail_1.ssghtml.php"></a><?=$aritcle1["title"]?></h1>
              <div class="reg-date"><?=$aritcle1["reg-date"]?></div>
              <div class="reg-writer">
                <span><?=$aritcle1["writer"]?></span>
                <span>
                <?=$aritcle1["writerAvatear"]?>
                                </span>

              </div>
              <div class="body">
                <script type="text/x-template"><?=$aritcle1["body"]?></script>
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
