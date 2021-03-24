<?php include 'header.php'; ?>

<main>

    <h1>
        <picture>
            <source type="image/webp" srcset="./img/fv-jp.webp">
            <img src="./img/fv-jp.jpg" alt="ネット証券ランキング" />
        </picture>
    </h1>
    <div style="margin-top:20px;">
            <?php include 'form.php'; ?>
        </div>
    <section class="text-box">
        <article>
        <?php if(is_mobile()) : ?>
        <p style="font-size: 1rem">
        <?php else : ?>
        <p style="font-size: 1.2rem">
            <?php endif; ?>
        <strong class="red">「初心者におすすめのネット証券は？」<br>「手数料が安いネット証券はどこ？」<br>「人気の証券会社が知りたい！」</strong></p>
        <br>
        <p>ネット証券は、<strong>圧倒的な手数料の安さ、便利で優秀な取引ツールが利用できる、PC・スマホでいつでも自分の好きなタイミングで売り買いの注文が出来る</strong>のが大きな魅力です。総合証券会社のように営業される心配も一切ありません。
        </p>
        <br>
        <p>当サイトでは<span class="bg-y red">おすすめの人気ネット証券会社をランキングでご紹介</span>していますので、ぜひ優良ネット証券を選んで投資ライフを充実させてくださいね！</p>
        </article>
    </section>

    <?php include 'rankings/ranking.php'; ?>

    <!-- <section id="pickup">
        <?php if(is_mobile()) : ?>
        <h2><?php echo date('Y'); ?>年<?php echo date('n'); ?>月の<span class="red">注目ピックアップ証券</span>！</h2>
        <?php else : ?>
        <h2><?php echo date('Y'); ?>年<?php echo date('n'); ?>月の<span class="y">注目ピックアップ証券</span>！</h2>
        <?php endif; ?>


        <article>
            <div class="pickupBox">
                <h3>
                    <a href="./link/sbimobi.php" target="_blank" class="prrrr">
                        SBIネオモバイル証券 </a>
                </h3>
                <div class="pickupContents">
                    <div class="imgBox">
                        <a href="./link/sbimobi.php" target="_blank" class="prrrr">
                            <img src="img/250_250.png" alt="">
                        </a>
                    </div>
                    <div class="rightBox">
                        <div class="pickupText">
                            <p>
                                <span
                                    class="red">日本初！Tポイントを使って株を買うことができる証券会社</span>です。1株単位（単元未満株）から購入できるため、数百円で有名企業の株主になれるチャンス！

                                気軽に投資を始めたい株初心者の方や、Tポイントが貯まっている方にいま人気のサービスです。もちろん現金での購入も可能です。

                                <span class="red">手数料は月額220円（税込）で取引放題</span>、さらに<span
                                    class="red">期間固定Tポイント200ptが毎月もらえる</span>ので、実質20円で
                                毎月取引出来ちゃうのが嬉しいです！

                                口座開設も<span class="red">とてもかんたん</span>ですので、ぜひはじめての投資をTポイントで始めみてはいかがでしょうか。
                            </p>
                        </div>

                    </div>

                </div>

                <div class="pickupBtn">
                    <a href="./link/sbimobi.php" target="_blank" class="prrrr">
                        SBIネオモバイル証券<br>無料口座開設はこちら
                    </a>
                </div>
            </div>
        </article>

    </section> -->


    <section id="content-area">

        <?php if(!is_mobile()) : ?>
        <h2>絶対に失敗しないネット証券の選び方！</h2>
        <?php else : ?>
        <h2>絶対に失敗しない<br>ネット証券の選び方！</h2>
        <?php endif; ?>

        <article class="point-article">
            <img src="./img/netshouken2.jpg" alt="ネット証券ランキング">
            <p>ネット証券選びで失敗しないためのポイントを以下の５つ。このポイントを押さえておけば、ネット証券選びで失敗することはありません。
            </p>
            <ul class="misspoint">
                <li class="point1">手数料がとにかく安い</li>
                <li class="point2">投資情報が充実している</li>
                <li class="point3">IPOの公募株、外国株があるかなど取扱商品が豊富</li>
                <li class="point4">経営が安定している大手ネット証券である</li>
                <li class="point5">取引ツールやスマホアプリの機能が優れている</li>
            </ul>

            <div class="pickupitem">
                <p><span style="background: #ebdba1">全ての条件を満たしたNo.1ネット証券会社</span>は…</p>
                <p>↓↓↓↓↓</p>
                <strong>SBI証券！</strong>
            </div>

            <a href="./link/sbi.php" target="_blank" class="prrrr">
                <img src="./img/sbisyouken.jpg" alt="ネット証券ランキング">
            </a>

            <br><br>
            <div class="button-box">
                <a href="./link/sbi.php" target="_blank" class="prrrr">
                    <img src="./img/sbi-logo.png" alt="">無料口座開設はこちら
                </a>
            </div>

        </article>

        <article class="osu-article">
            <h2>目的別おすすめネット証券！</h2>
            <table class="small-table">
                <colgroup span="4" style="width:25%;">
                <tbody>
                    <tr>
                        <th style="background-color: var(--dgreen);">
                            <p>手数料が安い</p>
                        </th>
                        <th style="background-color: var(--ddgreen);">
                            <p>IPO株の引受社数が多い</p>
                        </th>
                        <th style="background-color: var(--dgreen);">
                            <p>NISA口座におすすめ</p>
                        </th>
                        <th style="background-color: var(--ddgreen);">
                            <p>初心者におすすめ</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <a href="./link/sbi.php" target="_blank" class="prrrr">
                                SBI証券
                            </a>
                        </td>
                        <td>
                            <a href="./link/sbi-ipo.php" target="_blank" class="prrrr">
                                SBI証券
                            </a>
                        </td>
                        <td>
                            <a href="./link/sbi-nisa.php" target="_blank" class="prrrr">
                                SBI証券
                            </a>
                        </td>
                        <td>
                            <a href="./link/matsui.php" target="_blank" class="prrrr">
                                松井証券
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="./link/sbi.php" target="_blank" class="prrrr"><img src="./img/sbi100_100.gif"
                                    alt="ネット証券ランキング"></a>
                            <p>業界最安水準の手数料の安さ！</p>

                        </td>
                        <td>
                            <a href="./link/sbi-ipo.php" target="_blank" class="prrrr"><img src="./img/sbi100_100.gif"
                                    alt="ネット証券ランキング"></a>
                            <p>IPO取扱銘柄断トツNo.1！</p>

                        </td>
                        <td>
                            <a href="./link/sbi-nisa.php" target="_blank" class="prrrr"><img src="./img/sbi100_100.gif"
                                    alt="ネット証券ランキング"></a>
                            <p>NISA口座開設数No.1！</p>

                        </td>
                        <td>
                            <a href="./link/matsui.php" target="_blank" class="prrrr"><img src="./img/matsui100_100.gif"
                                    alt="ネット証券ランキング"></a>
                            <p>サポートセンター充実で安心！</p>

                        </td>
                    </tr>
                    <tr>
                        <td><a class="t-btn prrrr" href="./link/sbi.php" target="_blank">公式サイト ＞</a></td>
                        <td> <a class="t-btn prrrr" href="./link/sbi-ipo.php" target="_blank">公式サイト ＞</a></td>
                        <td><a class="t-btn prrrr" href="./link/sbi-nisa.php" target="_blank">公式サイト ＞</a></td>
                        <td><a class="t-btn prrrr" href="./link/matsui.php" target="_blank">公式サイト ＞</a></td>
                    </tr>
                </tbody>
            </table>
        </article>

        <article class="last-article">
            <h2>自分に合ったネット証券を見つける方法！</h2>

            <div class="last-text">
                <p>ネット証券が提供するサービスや取引ツール、投資情報はそれぞれ異なります。
                    人によって使いやすさや求める投資情報も違い、<span class="bg-y red">合う合わないがありますので、まずは複数の口座を開設して試してみるのがおすすめ</span>です！</p>

                <p>おすすめは<a href="./link/sbi.php" target="_blank" class="prrrr">SBI証券</a>、<a href="./link/matsui.php"
                        target="_blank" class="prrrr">松井証券</a>、<a href="./link/rakuten.php" target="_blank"
                        class="prrrr">楽天証券</a>のランキング上位3口座は<strong>必ずすべて開設して試してみましょう</strong>。もちろん、それ以外に気になったネット証券口座があれば、そちらも開設しましょう。
                </p>

                <p>その中から、きっとあなたに合ったネット証券口座が見つかります！<span class="red">口座開設・維持費用は無料</span>ですので、ぜひ今すぐに口座開設して投資をスタートさせましょう！
                </p>
            </div>
        </article>
        
    </section>

</main>

<?php include 'nav.php'; ?> 

<div class="tab_content toptab">
    <?php include 'tab.php'; ?>
</div><!-- end.tab_content -->


<?php include 'footer.php'; ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters

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

});
</script>