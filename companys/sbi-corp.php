<?php include '../header-new.php'; ?>
<?php 
include '../inc/ranking.php';
include '../inc/reviews.php';
$server = 'https://'.$_SERVER['SERVER_NAME'];
$reslutArray = array_merge_recursive($r_list, $reviews);

?>

<main>
    <div id="siteNavi"><a href="./">トップページ</a> ＞ <?php echo $reslutArray['sbi']['name']; ?></div>
    <section id="ranking-area" class="">

        <article class="rank-01" data-rank="5">
            <div class="r-title">
                
                <h3><a href="<?php echo $server .$reslutArray['sbi']['url'] ?>" target="_blank" class="prrrr"><?php echo $reslutArray['sbi']['name'] ?></a></h3>
                <div class="number-box flex">
                    <p class="all-eval-title">総合評価</p>
                    <p class="all-eval-ctt"><span><?php echo $reslutArray['sbi']['sougou'] ?></span>点／100点
                    </p><img src="<?php echo $server .$reslutArray['sbi']['sougou_img'] ?>" alt="98点">
                </div>
            </div>

            <div class="item-content-box flex p10">
            <div class="left img-title">
                <a href="<?php echo $reslutArrayt['sbi']['url'] ?>" target="_blank" class="prrrr">
                    <p class="txt-img">
                        <img src="<?php echo $reslutArray['sbi']['image'] ?>" alt="">
                        <!-- <a class="txt-btn prrrr" href="<?php echo $reslutArray['sbi']['url'] ?>" target="_blank">公式サイト</a> -->
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
                            <td><?php echo $reslutArray['sbi']['tesuryou_1_1'] ?></td>
                            <td><?php echo $reslutArray['sbi']['tesuryou_1_2'] ?></td>
                            <td><?php echo $reslutArray['sbi']['tesuryou_1_3'] ?></td>
                            <td><?php echo $reslutArray['sbi']['tesuryou_1_4'] ?></td>
                        </tr>
                        <tr>
                            <td>1日定額</td>
                            <td><?php echo $reslutArray['sbi']['tesuryou_2_1'] ?></td>
                            <td><?php echo $reslutArray['sbi']['tesuryou_2_2'] ?></td>
                            <td><?php echo $reslutArray['sbi']['tesuryou_2_3'] ?></td>
                            <td><?php echo $reslutArray['sbi']['tesuryou_2_4'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php if(!is_mobile()) : ?>
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
                                <p><?php echo $reslutArray['sbi']['ipo'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['nisa'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['shintaku'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['ryou'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['torihiki'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['tangen'] ?></p>
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
                                <p><?php echo $reslutArray['sbi']['yakkan'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['gaikoku'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['tool'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['syouhinsu'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['smart'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $reslutArray['sbi']['price'] ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php endif; ?>
               
            </div>


        </div>
       
        <div class="po-list">
            <h4><?php echo $reslutArray['sbi']['name'] ?>のおすすめポイント</h4>

            <ul>
                <li><?php echo $reslutArray['sbi']['point1'] ?>
                </li>
                <li><?php echo $reslutArray['sbi']['point2'] ?></li>
                <?php if(!empty($reslutArray['sbi']['point3'])) : ?>
                <li><?php echo $reslutArray['sbi']['point3'] ?></li>
                <?php endif; ?>
            </ul>

        </div>

        <?php if(is_mobile()) : ?>
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
                        <p><?php echo $reslutArray['sbi']['ipo'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['nisa'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['shintaku'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['ryou'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['torihiki'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['tangen'] ?></p>
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
                        <p><?php echo $reslutArray['sbi']['yakkan'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['gaikoku'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['tool'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['syouhinsu'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['smart'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $reslutArray['sbi']['price'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php endif; ?>

        <?php if(!empty( $reslutArray['sbi']['coment_top'])) : ?>
        <div class="comment">
            <h4>ネット証券の窓口 編集部のコメント</h4>
            <p>
            <?php echo $reslutArray['sbi']['coment_top'] ?>
            </p>
        </div>
        <?php endif; ?>


        <div class="flex osubox">
            <div class="osu-ctt">
                <div>
                    <h4><?php echo $reslutArray['sbi']['name'] ?>はこんな方におすすめ！</h4>
                    <ul>
                        <li><?php echo $reslutArray['sbi']['osusume_point1'] ?></li>
                        <li><?php echo $reslutArray['sbi']['osusume_point2'] ?></li>
                    </ul>
                </div>
                <img src="./img/dansei.jpg">
            </div>
        </div>

        <?php if(!empty( $reslutArray['sbi']['campaign'])) : ?>
        <div class="cam-box">
            <h4>期間限定キャンペーン情報！</h4>
            <p class="cam-ctt"><?php echo $reslutArray['sbi']['campaign'] ?></p>
        </div>
        <?php endif; ?>

        <div class="button-box">
            <a href="<?php echo $reslutArray['sbi']['url'] ?>" target="_blank" class="prrrr">
                <img src="<?php echo $reslutArray['sbi']['btnLogo'] ?>" alt="">無料口座開設はこちら
            </a>
        </div>

        </article>

    </section>

    
    
    <section id="review-box">
        <article class="matsui-r" id="review">
            <h3><?php echo $reslutArray['sbi']['name'] ?>最新の口コミ</h3>
            <?php
                    $reviewLoop = $reslutArray['sbi']['reviews'];
                    foreach($reviewLoop as $v => $key) {
                    ?>
            <div class="re-content <?php echo $reviewLoop[$v]['sex']; ?> swiper-slide">
                <div>
                    <p><?php echo $reviewLoop[$v]['name']; ?><span class="small"><?php echo $reviewLoop[$v]['sub']; ?></span><img src="<?php echo $reviewLoop[$v]['star']; ?>" alt="" /></p>
                    <p><?php echo $reviewLoop[$v]['descript']; ?>
                    </p>
                </div>
            </div>
            <?php } ?>
            <div class="button-box">
                <a href="<?php echo $reslutArray['sbi']['url'] ?>" target="_blank" class="prrrr">
                    <img src="<?php echo $reslutArray['sbi']['btnLogo'] ?>" alt="">無料口座開設はこちら
                </a>
            </div>

        </article>
    </section>

</main>


<?php include 'nav.php'; ?>


<?php include 'footer.php'; ?>