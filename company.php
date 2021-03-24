<?php include 'header.php'; ?>
<?php 
include ('inc/ranking.php');
include ('inc/reviews.php');
$reslutArray = array_merge_recursive($r_list, $reviews);

$names = array('sbi', 'matsui', 'rakuten', 'dmm', 'sbimobi', 'livestar', 'line', 'smbc', 'monex', 'oka', 'kabucom', 'gmo', 'musashi', 'iwai', 'tachibana', 'nomura');
?>
 <?php 
        $i = 0;
        foreach ($reslutArray as $c) {
            $i++;
            if ($i == 2) {
                break;
            } 
            foreach ($names as $n) {
                if ($_GET['c'] == $n) {
                    $c = $n;
                    ?>
<main>
    <div id="siteNavi"><a href="./">トップページ</a> ＞ <?php echo $reslutArray[$c]['name']; ?></div>
    <section id="ranking-area" class="">

        <article class="rank-01" data-rank="5">
            <div class="r-title">
                
                <h3><a href="<?php echo $reslutArray[$c]['url'] ?>" target="_blank" class="prrrr"><?php echo $reslutArray[$c]['name'] ?></a></h3>
                <div class="number-box flex">
                    <p class="all-eval-title">総合評価</p>
                    <p class="all-eval-ctt"><span><?php echo $reslutArray[$c]['sougou'] ?></span>点／100点
                    </p><img src="<?php echo $reslutArray[$c]['sougou_img'] ?>" alt="98点">
                </div>
            </div>

            <div class="item-content-box flex p10">
            <div class="left img-title">
                <a href="<?php echo $reslutArrayt[$c]['url'] ?>" target="_blank" class="prrrr">
                    <p class="txt-img">
                        <img src="<?php echo $reslutArray[$c]['image'] ?>" alt="">
                        <!-- <a class="txt-btn prrrr" href="<?php echo $reslutArray[$c]['url'] ?>" target="_blank">公式サイト</a> -->
                    </p>
                </a>
            </div>

            <div class="right">
                <table class="rank-table">
                    <tbody>
                        <tr>
                            <th>手数料※税別</th>
                            <th>～10万円</th>
                            <th>～30万円</th>
                            <th>～50万円</th>
                            <th>～100万円</th>
                        </tr>
                        <tr>
                            <td>約定ごと</td>
                            <td><?php echo $reslutArray[$c]['tesuryou_1_1'] ?></td>
                            <td><?php echo $reslutArray[$c]['tesuryou_1_2'] ?></td>
                            <td><?php echo $reslutArray[$c]['tesuryou_1_3'] ?></td>
                            <td><?php echo $reslutArray[$c]['tesuryou_1_4'] ?></td>
                        </tr>
                        <tr>
                            <td>1日定額</td>
                            <td><?php echo $reslutArray[$c]['tesuryou_2_1'] ?></td>
                            <td><?php echo $reslutArray[$c]['tesuryou_2_2'] ?></td>
                            <td><?php echo $reslutArray[$c]['tesuryou_2_3'] ?></td>
                            <td><?php echo $reslutArray[$c]['tesuryou_2_4'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!is_mobile()) : ?>
                <table class="rank-table table-second">
                    <tbody>
                        <tr>
                            <th>IPO</th>
                            <th>NISA</th>
                            <th>投資信託</th>
                            <th>投資情報量</th>
                            <th>信用取引</th>
                            <th>単元未満株</th>
                        </tr>
                        <tr>
                            <td>
                                <p><?php echo $reslutArray[$c]['ipo'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['nisa'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['shintaku'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['ryou'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['torihiki'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['tangen'] ?></p>
                            </td>
                        </tr>
                        <tr>
                            <th>夜間取引</th>
                            <th>外国株</th>
                            <th>ツール</th>
                            <th>取扱商品数</th>
                            <th>スマホ専用アプリ</th>
                            <th>口座開設・維持費用</th>
                        </tr>
                        <tr>
                            <td>
                                <p><?php echo $reslutArray[$c]['yakkan'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['gaikoku'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['tool'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['syouhinsu'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['smart'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray[$c]['price'] ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php endif; ?>
               
            </div>


        </div>
       
        <div class="po-list">
            <h4><i class="fas fa-hand-point-right"></i><?php echo $reslutArray[$c]['name'] ?>のおすすめポイント</h4>

            <ul>
                <li><?php echo $reslutArray[$c]['point1'] ?>
                </li>
                <li><?php echo $reslutArray[$c]['point2'] ?></li>
                <?php if (!empty($c['point3'])) : ?>
                <li><?php echo $reslutArray[$c]['point3'] ?></li>
                <?php endif; ?>
            </ul>

        </div>

        <?php if (is_mobile()) : ?>
        <table class="rank-table table-second">
            <tbody>
                <tr>
                    <th>IPO</th>
                    <th>NISA</th>
                    <th>投資信託</th>
                    <th>投資情報量</th>
                    <th>信用取引</th>
                    <th>単元未満株</th>
                </tr>
                <tr>
                    <td>
                        <p><?php echo $reslutArray[$c]['ipo'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['nisa'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['shintaku'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['ryou'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['torihiki'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['tangen'] ?></p>
                    </td>
                </tr>
                <tr>
                    <th>夜間取引</th>
                    <th>外国株</th>
                    <th>ツール</th>
                    <th>取扱商品数</th>
                    <th>スマホ専用アプリ</th>
                    <th>口座開設・維持費用</th>
                </tr>
                <tr>
                    <td>
                        <p><?php echo $reslutArray[$c]['yakkan'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['gaikoku'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['tool'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['syouhinsu'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['smart'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray[$c]['price'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php endif; ?>

        <?php if (!empty($reslutArray[$c]['comment_top'])) : ?>
        <div class="comment">
            <h4>ネット証券の窓口 編集部のコメント</h4>
            <p>
            <?php echo $reslutArray[$c]['comment_top'] ?>
            </p>
        </div>
        <?php endif; ?>


        <div class="flex osubox">
            <div class="osu-ctt">
                <div>
                    <h4><?php echo $reslutArray[$c]['name'] ?>はこんな方におすすめ！</h4>
                    <ul>
                        <li><?php echo $reslutArray[$c]['osusume_point1'] ?></li>
                        <li><?php echo $reslutArray[$c]['osusume_point2'] ?></li>
                    </ul>
                </div>
                <img src="./img/dansei.jpg">
            </div>
        </div>

        <?php if (!empty($c['campaign'])) : ?>
        <div class="cam-box">
            <h4>期間限定キャンペーン情報！</h4>
            <p class="cam-ctt"><?php echo $reslutArray[$c]['campaign'] ?></p>
        </div>
        <?php endif; ?>

        <div class="button-box">
            <a href="<?php echo $reslutArray[$c]['url'] ?>" target="_blank" class="prrrr">
                <img src="<?php echo $reslutArray[$c]['btnLogo'] ?>" alt="">無料口座開設はこちら
            </a>
        </div>

        </article>

    </section>

    
    
    <section id="review-box">
        <article class="matsui-r" id="review">
            <h3><?php echo $reslutArray[$c]['name'] ?>最新の口コミ<i class="fas fa-comments"></i></h3>
            <?php
                    $reviewLoop = $reslutArray[$c]['reviews'];
                    foreach ($reviewLoop as $v => $key) {
                        ?>
            <div class="re-content <?php echo $reviewLoop[$v]['sex']; ?> swiper-slide">
                <div>
                    <p><?php echo $reviewLoop[$v]['name']; ?><span class="small"><?php echo $reviewLoop[$v]['sub']; ?></span><img src="<?php echo $reviewLoop[$v]['star']; ?>" alt="" /></p>
                    <p><?php echo $reviewLoop[$v]['descript']; ?>
                    </p>
                </div>
            </div>
            <?php
                    } ?>
            <div class="button-box">
                <a href="<?php echo $reslutArray[$c]['url'] ?>" target="_blank" class="prrrr">
                    <img src="<?php echo $reslutArray[$c]['btnLogo'] ?>" alt="">無料口座開設はこちら
                </a>
            </div>

        </article>
    </section>

</main>
<?php
                }
            }
        }
       ?>

<?php include 'nav.php'; ?>


<?php include 'footer.php'; ?>