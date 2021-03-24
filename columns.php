<?php include 'header.php'; 
?>

<?php
include ('inc/data-columns.php');

?>

<main class="sub-page">
    
    <?php 
        $i = 0;
        foreach ($columns as $c) {
        $i++;
        if ($_GET['cols'] == $i) {
    ?>

   <?php include ('inc/column.php'); ;?>
           
    <?php
    }}
    ?>

<?php  if (!$_GET['cols'] == $i) { ?>
    <div id="siteNavi"><a href="./">トップページ</a> ＞ ネット証券コラム</div>

    <div id="columns-wrap">
    
        <?php 
            $i = 0;
            foreach ($columns as $c) {
                $i++; 
                $get = $_GET['cols'] == $i;
               
        ?>
        <div class="column-box">
        <a href="./columns.php?cols=<?php echo $i; ?>">

                <div class="right ctt">
                    <a href="./columns.php?cols=<?php echo $i; ?>" class="title-link">
                    <i class="fas fa-clipboard"></i><?php echo $columns[$i]['title']; ?>
                    </a>
                    <p>
                        <?php echo $columns[$i]['40moji']; ?>...
                    </p>
                </div>

            </a>
        </div>
        <?php
            } 
        ?>
        
    </div>
    <?php
            } 
        ?>
</main>


<?php include 'nav.php'; ?>


<?php include 'footer.php'; ?>