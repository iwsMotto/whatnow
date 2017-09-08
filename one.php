<?php
session_start();

$arrtest = array();
$arrtest[] = "11";
$arrtest[] = "22";
$arrtest[] = "33";
$_SESSION['arrtest'] = $arrtest;
foreach ($_SESSION['arrtest'] as $data):
    ?>
    <li><?php echo $data ?></li>
    <?php
endforeach;
?>