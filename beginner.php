<?php include 'header.php'; ?>

<main class="sub-page">
    <div id="siteNavi"><a href="./">トップページ</a> ＞ 初心者向けランキング</div>
    <img src="./img/rank-beginner-bn.jpg" width="100%" alt="初心者向けランキング" />


    <section class="sub-text-box">

        <?php if(is_mobile()) : ?>
        <h3 style="font-size: 1rem">
        <?php else : ?>
        <h3 style="font-size: 1.2rem">
            <?php endif; ?>
        株式投資の始め方は？</h3>
        <br>
        株式投資を始めるには、証券会社での口座開設が必要です。<span class="red">株式投資初心者にはPC・スマホで口座開設と株取引がすべて完結できるネット証券がおすすめ</span>です。手数料が安く、少額から購入可能なので、だれでも気軽に株式投資をスタートできます。<br><br>

        初心者向けに勉強できるコンテンツや投資情報が充実しているのも魅力です。専門用語やツールの使い方、チャートの見方が分からなくてもサポートデスクがあるので、気軽に電話で質問できるのでとても助かります。<br><br>

        このページでは、<span class="red bg-y">株式投資初心者におすすめのネット証券をランキングでご紹介</span>しますので、ぜひこの機会に株式投資デビューしましょう！<span
            class="red">口座開設はネットで最短5分、無料</span>です♪
        </h3>
    </section>

    <?php include 'rankings/beginner.php'; ?>

</main>

<?php include 'nav.php'; ?>

<div class="tab_content toptab">
    <?php include 'tab.php'; ?>
</div><!-- end.tab_content -->


<?php include 'footer.php'; ?>