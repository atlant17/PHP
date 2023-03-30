<?php

$tr = true;
$fls = false;
$a = 0;
$b = 1;
$negative_b = -1;
$string_b = "1";
$nul = null;
$string = "php";

?>

<div class="container">
    <table class="table_2">
       <tr class="grey">
        <td></td>
        <td>
            <strong><?php echo 'true' ?></strong>
        </td>
        <td>
            <strong><?php echo 'false' ?></strong>
        </td>
        <td>
            <strong><?php echo 0 ?></strong>
        </td>
        <td> 
            <strong><?php echo 1 ?></strong>
        </td>
        <td> 
            <strong><?php echo -1 ?></strong>
        </td>
        <td>
            <strong><?php echo ' "1" ' ?></strong>
        </td>
        <td> 
            <strong><?php echo 'null' ?></strong>
        </td>
        <td> 
            <strong><?php echo ' "php" ' ?></strong>
        </td>
       </tr>
       <tr>
        <td class="grey">
            <strong><?php echo 'true' ?></strong>
        </td>
        <td class="true">
            <?php 
                if($tr == true) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($tr == false) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($tr == 0) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($tr == 1) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($tr == (-1)) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($tr == "1") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($tr == null) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($tr == "php") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
       </tr>
       <tr>
        <td class="grey">
            <strong><?php echo 'false' ?></strong>
        </td>
        <td class="false">
            <?php 
                if($fls == true) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($fls == false) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($fls == 0) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($fls == 1) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($fls == (-1)) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($fls == "1") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($fls == null) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($fls == "php") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
       </tr>
       <tr>
        <td class="grey">
            <strong><?php echo 0 ?></strong>
        </td>
        <td class="false">
            <?php 
                if($a == true) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($a == false) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($a == 0) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($a == 1) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($a == (-1)) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($a == "1") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($a == null) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($a == "php") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
       </tr>
       <tr>
        <td class="grey">
            <strong><?php echo 1 ?></strong>
        </td>
        <td class="true">
        <?php 
                if($b == true) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($b == false) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($b == 0) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($b == 1) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($b == (-1)) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($b == "1") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($b == null) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($b == "php") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
       </tr>
       <tr>
        <td class="grey">
            <strong><?php echo -1 ?></strong>
        </td>
        <td class="true">
            <?php 
                if($negative_b == true) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($negative_b == false) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($negative_b == 0) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($negative_b == 1) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($negative_b == (-1)) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($negative_b == "1") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?> 
        </td>
        <td class="false">
            <?php 
                if($negative_b == null) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($negative_b == "php") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
       </tr>
       <tr>
        <td class="grey">
            <strong><?php echo ' "1" ' ?></strong>
        </td>
        <td class="true">
            <?php 
                if($string_b == true) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string_b == false) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string_b == 0) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($string_b == 1) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string_b == (-1)) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($string_b == "1") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?> 
        </td>
        <td class="false">
            <?php 
                if($string_b == null) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string_b == "php") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
       </tr>
       <tr>
        <td class="grey">
            <strong><?php echo 'null' ?></strong>
        </td>
        <td class="false">
            <?php 
                if($nul == true) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($nul == false) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($nul == 0) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($nul == 1) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($nul == (-1)) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($nul == "1") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?> 
        </td>
        <td class="true">
            <?php 
                if($nul == null) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($nul == "php") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
       </tr>
       <tr>
        <td class="grey">
            <strong><?php echo ' "php" ' ?></strong>
        </td>
        <td class="true">
            <?php 
                if($string == true) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string == false) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string == 0) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string == 1) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string == (-1)) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="false">
            <?php 
                if($string == "1") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?> 
        </td>
        <td class="false">
            <?php 
                if($string == null) {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
        <td class="true">
            <?php 
                if($string == "php") {
                    echo 'true';
                } else { 
                    echo 'false';
                }
            ?>
        </td>
       </tr>
 
      
    