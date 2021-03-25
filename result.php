<?php include 'header-new.php'; ?>
<div id="layoutbox">
<div id="main">

<article>
<div id="text1">

  <div id="siteNavi"><a href="./">トップページ</a> ＞ 検索結果</div>
   <p class="kekka"><i class="fas fa-search"></i> 検索結果：  <span id="kensu"></span>件</p>

   <?php include 'inc/syutoku_p.php'; ?>
   
   <div id="store-data">
   
	  <div class="tab_content">
	  
	   <?php include 'tab.php'; ?>
	   
	  </div><!-- end.tab_content -->
	  
  </div><!-- end.store -->

</div><!-- text1 -->
</article>


</div><!-- main -->

<?php include 'form.php';?>



<?php include 'footer.php'; ?>