<nav>
<?php if(!$mobile) : ?>
    <section>
        <div class="pickup">
            <a href="./link/sbi.php" target="_blank" class="prrrr"><img src="./img/sbi_fuji_250×250.png"
                    alt=""></a>
        </div>
    </section>
    <?php endif; ?>
    <section>
        <div id="nav-mokuteki" class="nav-list">
            <h2><span>目的別おすすめ証券会社</span></h2>
            <ul>
                <li>
                    <a href="./ranking.php">
                        <img src="img/banner-01.jpg">
                    </a>
                </li>
                <li>
                    <a href="./beginner.php"><img src="img/banner-02.jpg"></a>
                </li>
                <li>
                    <a href="./fee.php"><img src="img/banner-03.jpg"></a>
                </li>
                <li>
                    <a href="./ipo.php"><img src="img/banner-04.jpg"></a>
                </li>
                <li>
                    <a href="./nisa.php"><img src="img/banner-05.jpg"></a>
                </li>
                <li>
                    <a href="./investment-trust.php"><img src="img/banner-06.jpg"></a>
                </li>
                <li>
                    <a href="./america.php"><img src="img/banner-07.jpg"></a>
                </li>
                <li>
                    <a href="./smartphone.php"><img src="./img/banner-09.jpg"></a>
                </li>
                <li>
                    <a href="./foreign.php"><img src="./img/banner-10.jpg"></a>
                </li>
            </ul>
        </div>
    </section>
    <section>
    <?php
        include ('inc/ranking.php');
        include ('inc/data-columns.php');
    ?>
        <div id="nav-ranking" class="nav-list">
            <h2><span>人気の証券会社</span></h2>
            <ul>
                <?php $i = 0;
                foreach($r_list as $r) : 
                $i++;
                ?>
                <?php if(!empty($r['pageUrl'])) : ?>
                    
                <li><a href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].'/newnetsyouken/company.php?c='.$r['pageUrl']; ?>"><?php echo $r['name'] ?></a></li>
                <?php endif; endforeach; ?>
                
            </ul>
        </div>
    </section>
    <section>
        <div id="nav-review" class="nav-list">
            <h2><span>人気の証券会社の口コミ</span></h2>
            <ul>
            <?php $i = 0;
                foreach($r_list as $r) : 
                $i++;
            ?>
                <?php if(!empty($r['pageUrl'])) : ?>
                    <li><a href="<?php echo 'company.php?c='.$r['pageUrl'].'#review-box'; ?>"><?php echo $r['name'] ?>の口コミ</a></li>
                <?php endif; endforeach; ?>
            </ul>
        </div>
    </section>
    <section>
        <div>
            <h2><span>株コラム</span></h2>
            <ul>
            <?php 
                $i = 0;
                foreach ($columns as $c) {
                    $i++; ?>

                <li><a href="columns.php?cols=<?php echo $i; ?>"><?php echo $columns[$i]['title']; ?></a></li>

            <?php
                } ?>
            </ul>
        </div>
    </section>
</nav>