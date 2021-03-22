<?php include 'header.php'; ?>


<?php if($_GET["col"] == 1) : ?>

<?php include "columns/column1.php"; ?>

<?php elseif($_GET["col"] == 2) : ?>

<?php include "columns/column2.php"; ?>

<?php elseif($_GET["col"] == 3) : ?>

<?php include "columns/column3.php"; ?>

<?php elseif($_GET["col"] == 4) : ?>

<?php include "columns/column4.php"; ?>

<?php elseif($_GET["col"] == 5) : ?>

<?php include "columns/column5.php"; ?>

<?php elseif($_GET["col"] == 6) : ?>

<?php include "columns/column6.php"; ?>

<?php elseif($_GET["col"] == 7) : ?>

<?php include "columns/column7.php"; ?>

<?php elseif($_GET["col"] == 8) : ?>

<?php include "columns/column8.php"; ?>

<?php elseif($_GET["col"] == 9) : ?>

<?php include "columns/column9.php"; ?>

<?php elseif($_GET["col"] == 10) : ?>

<?php include "columns/column10.php"; ?>

<?php else : ?>

<p>COLUMNS</p>

<?php endif; ?>

<?php include 'nav.php'; ?>


<?php include 'footer.php'; ?>
