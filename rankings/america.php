<?php 
include ('./inc/ranking.php');
include ('./inc/reviews.php');
?>





<?php 

$reslutArray = array_merge_recursive($r_list, $reviews);

$i = 0;
function user_compare_data($a, $b){
        
        if ($a['rankAme'] == $b['rankAme']) {
            return 0;
        }
        return ($a['rankAme'] < $b['rankAme']) ? -1 : 1;
    }
usort($reslutArray, 'user_compare_data');

?>
<?php 
    $count = 0;
    foreach ( $reslutArray as $res )  {
        if ( $res['rankAme'] != null ) {
            $count++;
        }
    }
?>
<section id="ranking-area" class="">
    <div class="ranking-title">
        <?php if(is_mobile()) : ?>
        <h2>米国株投資におすすめの<br>証券会社ベスト<?php echo $count; ?>！</h2>
        <?php else : ?>
        <h2>米国株投資におすすめの証券会社ベスト<?php echo $count; ?>！</h2>
        <?php endif; ?>
    </div>
    <?php 
foreach ($reslutArray as &$r) {
    $i++;
    if($r['rankAme'] == '') {
        unset($r);
        continue;
    }
    ?>

   <?php if($i <= 3) : ?>
    <?php  $i++; ?>

    <article class="rank-0<?php echo $r['rankAme']; ?>" data-rank="<?php echo $r['rankAme']; ?>">
    <?php else : ?>
        <article class="rank-0<?php echo $r['rankAme']; ?>" data-rank="4">
        <?php endif; ?>

        <div class="r-title">
            <img class="badge" src="./img/badge-<?php echo $r['rankAme']; ?>-pc.png" alt="">

            <h3>
                <?php if(!empty($r['urlAme'])) : ?>
                <a href="<?php echo $r['urlAme'] ?>" target="_blank" class="prrrr">
                    <?php else : ?>
                    <a href="<?php echo $r['url'] ?>" target="_blank" class="prrrr">
                        <?php endif; ?>
                        <?php echo $r['name'] ?></a>
            </h3>

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
                <?php if(!empty($r['urlAme'])) : ?>
                <a href="<?php echo $r['urlAme'] ?>" target="_blank" class="prrrr">
                    <?php else : ?>
                    <a href="<?php echo $r['url'] ?>" target="_blank" class="prrrr">
                        <?php endif; ?>
                        <p class="txt-img">
                            <?php if(!empty($r['imageAme'])) : ?>
                            <img src="<?php echo $r['imageAme'] ?>" alt="">
                            <?php else : ?>
                            <img src="<?php echo $r['image'] ?>" alt="">
                            <?php endif; ?>
                            <!-- <a class="txt-btn prrrr" href="<?php echo $r['url'] ?>" target="_blank">公式サイト</a> -->
                        </p>
                    </a>
            </div>

            <div class="right">

                <table class="rank-table america">
                    <tbody>
                        <tr>
                            <th colspan="4">米国株式の手数料</th>
                        </tr>
                        <tr>
                            <th>米国株式の手数料</th>
                            <th>最低手数料</th>
                            <th>上限手数料</th>
                            <th>米国株取扱銘柄数</th>
                        </tr>
                        <tr>
                            <td><?php echo $r['ameTes_1_1'] ?></td>
                            <td><?php echo $r['ameTes_1_2'] ?></td>
                            <td><?php echo $r['ameTes_1_3'] ?></td>
                            <td><?php echo $r['ameTes_1_4'] ?></td>
                        </tr>

                    </tbody>
                </table>

                <?php if(!is_mobile()) : ?>

                <div class="po-list">

                    <h4><i class="fas fa-hand-point-right"></i><?php echo $r['name'] ?>のおすすめポイント</h4>

                    <ul>
                        <?php if(!empty($r['ame_point1'])) : ?>
                        <li><?php echo $r['ame_point1'] ?>
                        </li>
                        <li><?php echo $r['ame_point2'] ?></li>
                        <?php else : ?>
                        <li><?php echo $r['point1'] ?>
                        </li>
                        <li><?php echo $r['point2'] ?></li>
                        <?php if(!empty($r['point3'])) : ?>
                        <li><?php echo $r['point3'] ?></li>
                        <?php endif; ?>
                        <?php endif; ?>
                    </ul>

                </div>
                <?php endif; ?>

            </div>
        </div>

        <?php if(is_mobile()) : ?>
        <div class="po-list">
            <h4><i class="fas fa-hand-point-right"></i><?php echo $r['name'] ?>のおすすめポイント</h4>


            <ul>
                <?php if(!empty($r['ame_point1'])) : ?>
                <li><?php echo $r['ame_point1'] ?>
                </li>
                <li><?php echo $r['ame_point2'] ?></li>
                <?php else : ?>
                <li><?php echo $r['point1'] ?>
                </li>
                <li><?php echo $r['point2'] ?></li>
                <?php if(!empty($r['point3'])) : ?>
                <li><?php echo $r['point3'] ?></li>
                <?php endif; ?>
                <?php endif; ?>
            </ul>

        </div>
        <?php endif; ?>



        <?php if(!empty($r['comment_top'])) : ?>
        <div class="comment">
            <h4><i class="fas fa-comment-alt"></i>ネット証券の窓口 編集部のコメント</h4>
            <p>
                <?php if(!empty($r['comment_ame'])) : ?>
                <?php echo $r['comment_ame'] ?>
                <?php else : ?>
                <?php echo $r['comment_top'] ?>
                <?php endif; ?>
            </p>

        </div>
        <?php endif; ?>



        <div class="button-box">
            <?php if(!empty($r['urlAme'])) : ?>
            <a href="<?php echo $r['urlAme'] ?>" target="_blank" class="prrrr">
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