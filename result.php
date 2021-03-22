<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<?php include 'inc/headtag.php'; ?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>ネット証券ランキング</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/css/theme.default.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="./styles.css" type="text/css" />
<link rel="stylesheet" href="./css/textstyles.css" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="./rss.xml" />
<link rel="stylesheet" href="./addstyle.css" type="text/css" />
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/js/jquery.tablesorter.min.js"></script>
<script src="js/myquery.js"></script>

</head>
<body ontouchstart="">
<?php include 'inc/bodytag.php'; ?>
<div id="wrapper">

<header>
<div id="header">
<div id="headertxt">
<h2 class="title"><span><a href="./">ネット証券ランキング</a></span></h2>
</div>
</div>
</header>

<div id="column1">
<div id="contents">
<div id="layoutbox">
<div id="main">


<article>
<div id="text1">
  <div class="none">
    <p><span style="font-size:24px" class="lbg"><strong><span class="ylw">ネット証券ランキング 編集部監修</span></strong></span></p>
    <p>&nbsp;</p>
    <p style="text-align:center;"><span style="font-size:32px" class="lbg"><strong><span style="color:#FF0A0A">本当におすすめのネット証券人気ランキング！</span></strong></span></p>
    <p>&nbsp;</p>
    <p style="text-align:right;"><strong><span style="font-size:24px" class="lbg">【2019年5月最新版】</span></strong></p>
    <p>&nbsp;</p>
    <p class="txt-img" style="text-align:center"><img src="./img/netshouken1.jpg" alt="ネット証券ランキング" /></p>
  </div>
  <div><a  href="./">トップページ</a> ＞ 検索結果<br></div>
  <h2>検索結果</h2>
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


</div><!-- layoutbox -->
<div id="pagetop"><a href="#">先頭へ戻る</a></div>
</div><!-- contents -->
</div>
<footer id="footer">
<p id="footsub"><a href="./office.php">運営会社</a></p>
<small>Copyright &copy; 2019 ネット証券ランキングAll Rights Reserved.</small>
</footer>

</div>
<?php include 'inc/foottag.php'; ?>
</body>
</html>