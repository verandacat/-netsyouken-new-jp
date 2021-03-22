<?php
global $webroot;
$webroot = $_SERVER['DOCUMENT_ROOT'];
function is_mobile()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT']; // HTTP ヘッダからユーザー エージェントの文字列を取り出す

    return preg_match('/iphone|ipod|ipad|android/ui', $user_agent) != 0; // 既知の判定用文字列を検索
}

?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
    <?php //include 'inc/headtag.php'; ?>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ネット証券ランキング</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <?php if(is_mobile()) : ?>
    <link rel="stylesheet" href="./n_styles-new-sp.css?<?php echo time() ?>" type="text/css" />
    <?php else : ?>
    <link rel="stylesheet" href="./n_styles-new.css?<?php echo time() ?>" type="text/css" />
    <?php endif; ?>
    <link rel="stylesheet" href="./addstyle.css?<?php echo time() ?>" type="text/css" />
    <link rel="stylesheet" href="./css/tables.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="./rss.xml" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/js/jquery.tablesorter.min.js"></script>
    <script src="./js/myquery.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php //include 'inc/bodytag.php'; ?>

    <div id="wrapper">

        <div id="contents">