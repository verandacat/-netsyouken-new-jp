
<?php 
include ('./inc/ranking.php');
include ('./inc/reviews.php');
?>

<section id="ranking-area" class="">
<h2>NISA・つみたてNISAにおすすめの証券会社ベスト5！</h2>
<?php 

$reslutArray = array_merge_recursive($r_list, $reviews);


function user_compare_data($a, $b){
       
        if ($a['rankNisa'] == $b['rankNisa']) {
            return 0;
        }
        return ($a['rankNisa'] < $b['rankNisa']) ? -1 : 1;
    }
usort($reslutArray, 'user_compare_data');

// foreach ($reslutArray as $r) {
//     if ($r['rankIpo'] == '') {
//         unset($r);
//         continue;
//     }
//     echo $r['rankIpo'].'<br>';
//     echo $r['name'].'<br>';
// }

$i = 0;
foreach ($reslutArray as $r) {
    
    if($r['rankNisa'] == '') {
        unset($r);
        continue;
    }
    $i++;
    ?>
        <?php if($i <= 4) : ?>
        <article class="rank-0<?php echo $i; ?>" data-rank="<?php echo $i; ?>">
        <?php else : ?>
        <article class="rank-0<?php echo $i; ?>" data-rank="4">
        <?php endif; ?>
            <div class="r-title">
                <img class="badge" src="./img/badge-<?php echo $r['rankNisa']; ?>-pc.png" alt="">
               
                <h3>
                <?php if(!empty($r['urlNisa'])) : ?>
                <a href="<?php echo $r['urlNisa'] ?>" target="_blank" class="prrrr">
                <?php else : ?>
                <a href="<?php echo $r['url'] ?>" target="_blank" class="prrrr">
                <?php endif; ?>
                <?php echo $r['name'] ?></a></h3>
               
                <div class="number-box flex">
                <?php if(is_mobile()) : ?>
                <div class="all-eval-ctt">
                    <p>
                        <span><?php echo $r['sougou'] ?></span>点／100点
                    </p>
                    <img src="img/review_4.gif" alt="81点">
                </div>
                <?php else : ?>
                    <p class="all-eval-title">総合評価</p>
                    <p class="all-eval-ctt"><span><?php echo $r['sougou'] ?></span>点／100点
                    </p><img src="<?php echo $r['sougou_img'] ?>" alt="98点">
                <?php endif; ?>
                </div>
            </div>

            <div class="item-content-box flex p10">
                <div class="left img-title">
                    <?php if(!empty($r['urlNisa'])) : ?>
                    <a href="<?php echo $r['urlNisa'] ?>" target="_blank" class="prrrr">
                    <?php else : ?>
                    <a href="<?php echo $r['url'] ?>" target="_blank" class="prrrr">
                    <?php endif; ?>
                        <p class="txt-img">
                            <?php if(!empty($r['imageNisa'])) : ?>
                            <img src="<?php echo $r['imageNisa'] ?>" alt="">
                            <?php else : ?>
                            <img src="<?php echo $r['image'] ?>" alt="">
                            <?php endif; ?>
                            <!-- <a class="txt-btn prrrr" href="<?php echo $r['url'] ?>" target="_blank">公式サイト</a> -->
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
                                <td><?php echo $r['tesuryou_1_1'] ?></td>
                                <td><?php echo $r['tesuryou_1_2'] ?></td>
                                <td><?php echo $r['tesuryou_1_3'] ?></td>
                                <td><?php echo $r['tesuryou_1_4'] ?></td>
                            </tr>
                            <tr>
                                <td>1日定額</td>
                                <td><?php echo $r['tesuryou_2_1'] ?></td>
                                <td><?php echo $r['tesuryou_2_2'] ?></td>
                                <td><?php echo $r['tesuryou_2_3'] ?></td>
                                <td><?php echo $r['tesuryou_2_4'] ?></td>
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
                                    <p><?php echo $r['ipo'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['nisa'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['shintaku'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['ryou'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['torihiki'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['tangen'] ?></p>
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
                                    <p><?php echo $r['yakkan'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['gaikoku'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['tool'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['syouhinsu'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['smart'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $r['price'] ?></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>

            <div class="po-list">
                        <h4><?php echo $r['name'] ?>のおすすめポイント</h4>

                        <ul>
                            <?php if(!empty('nisa_point1')) : ?>
                            <li><?php echo $r['nisa_point1'] ?></span>
                            </li>
                            <li><?php echo $r['nisa_point2'] ?></li>

                                <?php if(!empty($r['nisa_point3'])) : ?>
                                <li><?php echo $r['nisa_point3'] ?></li>
                                <?php endif; ?>

                            <?php else : ?>

                            <li><?php echo $r['point1'] ?></span>
                            </li>
                            <li><?php echo $r['point2'] ?></li>
                            <?php if(!empty($r['point3'])) : ?>
                            <li><?php echo $r['point3'] ?></li>
                            <?php endif; ?>

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
                        <p><?php echo $r['ipo'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['nisa'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['shintaku'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['ryou'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['torihiki'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['tangen'] ?></p>
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
                        <p><?php echo $r['yakkan'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['gaikoku'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['tool'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['syouhinsu'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['smart'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $r['price'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php endif; ?>

        <?php if(!empty($r['comment_top'])) : ?>
            <div class="comment">
            <h4>ネット証券の窓口 編集部のコメント</h4>
            <?php if(!empty($r['comment_nisa'])) : ?>
            <p><?php echo $r['comment_nisa'] ?></p>
            <?php else : ?>
            <p><?php echo $r['comment_top'] ?></p>
            <?php endif; ?>           
        </div>
        <?php endif; ?>

        <?php if(!empty($r['osusume_point1'])) : ?>
        <div class="flex osubox">
            <div class="osu-ctt">
                <div>
                    <h4><?php echo $r['name'] ?>はこんな方におすすめ！</h4>
                    <ul>
                        <li><?php echo $r['osusume_point1'] ?></li>
                        <li><?php echo $r['osusume_point2'] ?></li>
                    </ul>
                </div>
                <img src="./img/dansei.jpg">
            </div>
        </div>
        <?php endif; ?>

        <?php if(!empty($r['campaign'])) : ?>
        <div class="cam-box">
            <h4>期間限定キャンペーン情報！</h4>
            <p class="cam-ctt"><?php echo $r['campaign'] ?></p>
        </div>
        <?php endif; ?>

        <div class="button-box">
            <?php if(!empty($r['urlNisa'])) : ?>
            <a href="<?php echo $r['urlNisa'] ?>" target="_blank" class="prrrr">
            <?php else : ?>
            <a href="<?php echo $r['url'] ?>" target="_blank" class="prrrr">
            <?php endif; ?>
                <img src="<?php echo $r['btnLogo'] ?>" alt="">無料口座開設はこちら
            </a>
        </div>

    
    
        <div class="kuchikomi-box">
        
            <h4><?php echo $r['name'] ?> 最新の口コミ</h4>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php
                    $reviewLoop = $r['reviews'];
                    foreach($reviewLoop as $v => $key) {
                    ?>
                    <div class="swiper-slide re-content <?php echo $reviewLoop[$v]['sex'] ?>">
                        <div>
                            <p><?php echo $reviewLoop[$v]['name'] ?><span class="small"><?php echo $reviewLoop[$v]['sub'] ?></span><img src="<?php echo $reviewLoop[$v]['star'] ?>" alt=""></p>
                            <p><?php echo $reviewLoop[$v]['descript'] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="button-box">
            <?php if(!empty($r['urlNisa'])) : ?>
            <a href="<?php echo $r['urlNisa'] ?>" target="_blank" class="prrrr">
            <?php else : ?>
            <a href="<?php echo $r['url'] ?>" target="_blank" class="prrrr">
            <?php endif; ?>
                <img src="<?php echo $r['btnLogo'] ?>" alt="">無料口座開設はこちら
            </a>
        </div>

        </article>
    
    
<?php
    }

?>
</section>




