<?php include 'header.php'; ?>

<main class="sub-page">
    <div id="siteNavi"><a href="./">トップページ</a> ＞ 米国株投資におすすめの証券会社ランキング</div>
    <img src="./img/rank-ame-bn.jpg" width="100%" alt="米国株投資ランキング" />

    <section class="text-box">
    <?php if(is_mobile()) : ?>
        <p style="font-size: 1rem">
        <?php else : ?>
        <p style="font-size: 1.2rem">
            <?php endif; ?>
        <strong class="red">「米国株が買える証券会社は？？」<br>「米国株の取引手数料が安いのはどこ？」</strong></p>
        <br>
        <p>米国株は1株から買えて、夜間でも取引ができ、また年4回の配当があったりと日本株とは違った特徴があります。米国株の取引には、米国株の取り扱いがある証券会社の口座開設が必要です。</p>
        <br>
        <p>このページでは、米国株の購入が可能な証券会社の中でも、特におすすめの証券会社をランキングでご紹介していますので、ぜひこの機会に米国株投資デビューしましょう！</p>
        <p>口座開設はネットで最短5分、無料です♪</p>
    </section>
    
    <?php include 'rankings/america.php'; ?>

    
</main>

<?php include 'nav.php'; ?>
<?php include 'ame-table.php'; ?>
<?php include 'footer.php'; ?>

