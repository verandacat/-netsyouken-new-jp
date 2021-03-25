<nav>
    <?php if(!$mobile) : ?>

    <section>
        <div class="pickup">
            <a href="./link/sbi.php" target="_blank" class="prrrr"><img src="./img/sbi_fuji_250×250.png" alt=""></a>
        </div>
    </section>
    <?php endif; ?>

    <section>
        <div id="nav-mokuteki" class="nav-list">
            <h2><i class="fas fa-caret-square-right"></i><span>目的別おすすめ証券会社</span></h2>
            <ul>
            <?php
            $i = 0;
            $dir = array('ranking','beginner','fee','ipo','nisa','investment-trust','america','smartphone','foreign');
            foreach ($dir as $d) {
                $i++; ?> 
                <li>
                    <a href="./<?php echo $d; ?>.php">
                        <picture>
                            <source type="image/webp" srcset="./img/nav/banner-0<?php echo $i; ?>.webp">
                            <img src="./img/nav/banner-0<?php echo $i; ?>.jpg" alt="ネット証券ランキング" />
                        </picture>
                    </a>
                </li>
                <?php
            } ?>
                
            </ul>
        </div>
    </section>

    <section>
        <?php
        include ('inc/ranking.php');
        include ('inc/data-columns.php');
    ?>
        <div id="nav-ranking" class="nav-list">
            <h2><i class="fas fa-caret-square-right"></i><span>人気の証券会社</span></h2>
            <ul>
                <?php $i = 0;
                foreach($r_list as $r) : 
                $i++;
                ?>
                <?php if(!empty($r['pageUrl'])) : ?>

                <li><a
                        href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].'/newnetsyouken/company.php?c='.$r['pageUrl']; ?>"><?php echo $r['name'] ?></a>
                </li>
                <?php endif; endforeach; ?>

            </ul>
        </div>
    </section>
    <section>
        <div id="nav-review" class="nav-list">
            <h2><i class="fas fa-caret-square-right"></i><span>人気の証券会社の口コミ</span></h2>
            <ul>
                <?php $i = 0;
                foreach($r_list as $r) : 
                $i++;
            ?>
                <?php if(!empty($r['pageUrl'])) : ?>
                <li><a
                        href="<?php echo 'company.php?c='.$r['pageUrl'].'#review-box'; ?>"><?php echo $r['name'] ?>の口コミ</a>
                </li>
                
                <?php endif; endforeach; ?>
            </ul>
        </div>
    </section>
    <section>
        <div id="nav-column" class="nav-list">
            <h2><i class="fas fa-caret-square-right"></i><span>株コラム</span></h2>
            <ul>
                <?php 
                $i = 0;
                foreach ($columns as $c) {
                    $i++; ?>

                <li><a href="columns.php?cols=<?php echo $i; ?>"><?php echo $columns[$i]['title']; ?></a></li>
                <?php if($i === 10) {
                    break;
                } ?>
                <?php
                } ?>
            </ul>
        </div>
    </section>
</nav>