<?php
require_once "date.php";
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
              <h1 class="title">Swiper_루프 적용</h1>
              <div class="reg-date">2020-01-14 02:00</div>
              <div class="reg-writer">
                <span>송유리</span>
                <span>
                  <svg viewBox="0 0 264 280">
                    <use xlink:href="#avatar-1"></use>
                  </svg>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template">
                  # Swiper 루프 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
  <div>
    <h1>스와이퍼 1</h1>
    <div class="my-slider my-slider-1">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
                  </div>
                  </div>
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
                  </div>
                  </div>
                  </div>
                  </section>
                  </<!--REPLACE:script-->>
```

# Swiper 루프 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
slidesPerView: 1,
spaceBetween: 30,
loop: true,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/VwKyxbz?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
1IPWQ0wlVoo
```
                </script>
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
              <h1 class="title">Swiper_분수 적용</h1>
              <div class="reg-date">2020-01-14 02:00</div>
              <div class="reg-writer">
                <span>송유리</span>
                <span>
                  <svg viewBox="0 0 264 280">
                    <use xlink:href="#avatar-1"></use>
                  </svg>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template">
                  # Swiper 분수 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
  <div>
    <h1>스와이퍼 1</h1>
    <div class="my-slider my-slider-1">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
                  </div>
                  </div>
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
                  </div>
                  </div>
                  </div>
                  </section>
                  </<!--REPLACE:script-->>
```

# Swiper 분수 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
pagination: {
el: '.swiper-pagination',
type: 'fraction',
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/QWKardo?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
1IPWQ0wlVoo
```
                </script>
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
              <h1 class="title">Swiper_게이지바 적용</h1>
              <div class="reg-date">2020-01-13 00:57</div>
              <div class="reg-writer">
                <span>송유리</span>
                <span>
                  <svg viewBox="0 0 264 280">
                    <use xlink:href="#avatar-1"></use>
                  </svg>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template">
                  # Swiper 게이지바 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
  <div>
    <h1>스와이퍼 1</h1>
    <div class="my-slider my-slider-1">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
                  </div>
                  </div>
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
                  </div>
                  </div>
                  </div>
                  </section>
                  </<!--REPLACE:script-->>
```

# Swiper 게이지바 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
pagination: {
el: '.swiper-pagination',
type: 'progressbar',
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/GRjYWvL?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
1IPWQ0wlVoo
```
                </script>
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
              <h1 class="title">Swiper_페이지바 적용</h1>
              <div class="reg-date">2020-01-13 00:57</div>
              <div class="reg-writer">
                <span>송유리</span>
                <span>
                  <svg viewBox="0 0 264 280">
                    <use xlink:href="#avatar-1"></use>
                  </svg>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template">
                  # Swiper 페이지바 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
  <div>
    <h1>스와이퍼 1</h1>
    <div class="my-slider my-slider-1">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
                  </div>
                  </div>
        <div class="swiper-pagination"></div>
                  </div>
                  </div>
                  </div>
                  </section>
                  </<!--REPLACE:script-->>
```

# Swiper 페이지바 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
pagination: {
el: '.swiper-pagination',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/YzGJZNO?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
G4gjZ97lx14
```
                </script>
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
              <h1 class="title">Swiper_버튼 적용</h1>
              <div class="reg-date">2020-01-12 17:50</div>
              <div class="reg-writer">
                <span>송유리</span>
                <span>
                  <svg viewBox="0 0 264 280">
                    <use xlink:href="#avatar-1"></use>
                  </svg>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template">
                  # Swiper 버튼 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
  <div>
    <h1>스와이퍼 1</h1>
    <div class="my-slider my-slider-1">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
                  </div>
                  </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
                  </div>
                  </div>
                  </div>
                  </section>
                  </<!--REPLACE:script-->>
```

# Swiper 버튼 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/XWjxbPQ?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
1IPWQ0wlVoo
```
                </script>
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
              <h1 class="title">Swiper 사용법</h1>
              <div class="reg-date">2020-01-12 14:49</div>
              <div class="reg-writer">
                <span>송유리</span>
                <span>
                  <svg viewBox="0 0 264 280">
                    <use xlink:href="#avatar-1"></use>
                  </svg>
                </span>

              </div>
              <div class="body">
                <script type="text/x-template">
                  # Swiper 사용법(HTML)
```html
<<!--REPLACE:script-->>
<!-- Slider main container -->
<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
                  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
                  </div>
                  </<!--REPLACE:script-->>
```
# Swiper 사용법(JS)
```js
var mySwiper = new Swiper('.swiper-container', {
// Optional parameters
direction: 'vertical',
loop: true,

// If we need pagination
pagination: {
el: '.swiper-pagination',
},

// Navigation arrows
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},

// And if we need scrollbar
scrollbar: {
el: '.swiper-scrollbar',
},
})
```
# 실습
```codepen
https://codepen.io/yurisong/embed/qBaJBeV?height=265&theme-id=light&default-tab=html,result
```

# 참고 영상
```youtube
nmo45DTXEcM
```
                </script>
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
