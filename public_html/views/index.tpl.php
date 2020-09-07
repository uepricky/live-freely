<!DOCTYPE html>
<!-- 互換性とアクセシビリティのために<html>タグの「lang=""」属性をセット。
     HTMLタグのほかの属性については下記ページを参考に。
     参考: http://www.w3.org/TR/html-markup/global-attributes.html -->
<html lang="ja">
  <?php include('header.inc.php'); ?>

  <body>
    <h1>LiveFreely</h1>

<div class="tab_wrap">
<input id="tab1" type="radio" name="tab_btn" checked>
<input id="tab2" type="radio" name="tab_btn">
<input id="tab3" type="radio" name="tab_btn">

<div class="tab_area">
<label class="tab1_label" for="tab1">配達</label>
<label class="tab2_label" for="tab2">ライティング</label>
<label class="tab3_label" for="tab3">単発ワークス</label>
</div>
<div class="panel_area">
<div id="panel1" class="tab_panel">
  <div class="slide-wrap">
  <div class="slide-box">
    <a href="URL">
      <img src="./images/ubereats.jpg">
      <p>UberEats記事</p>
    </a>
  </div>
  <div class="slide-box">
    <a href="URL">
      <img src="./images/didifood.jpg">
      <p>didifood記事</p>
    </a>
  </div>
  <div class="slide-box">
    <a href="URL">
      <img src="./images/chompy.jpg">
      <p>chompy記事</p>
    </a>
  </div>
  <div class="slide-box">
    <a href="URL">
      <img src="./images/demaekan.jpg">
      <p>demaekan記事</p>
    </a>
  </div>
  <div class="slide-box">
    <a href="URL">
      <img src="./images/foodpanda.jpg">
      <p>foodpanda記事</p>
    </a>
  </div>
  <div class="slide-box">
    <a href="URL">
      <img src="./images/grabfood.jpg">
      <p>grabfood記事</p>
    </a>
  </div>
</div>
</div>
<div id="panel2" class="tab_panel">
<p>panel2</p>
</div>
<div id="panel3" class="tab_panel">
<p>panel3</p>
</div>
</div>
</div>
  <!-- コンテンツを配置 -->

  <!-- スクリプトでブロッキングを起こすものはここに記述
       ブロッキングを起こす原因としては、
       CSSのセレクタ操作（IE）、負荷の高いDOM操作、多数のスクリプトなど -->
  <!-- SCRIPTS -->
  <!-- 例: <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

    <?php include('footer.inc.php'); ?>
  </body>
</html>
