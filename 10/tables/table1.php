<?php 
$a = 0;
$b = 1;

?>

<div class="container">
        <table class="table_1">
                <tr class="grey">
                    <td >
                        <strong>A</strong>
                    </td>
                    <td>
                        <strong>B</strong>
                    </td>
                    <td>
                        <strong>!A</strong>
                    </td>
                    <td>
                        <strong>A || B</strong>
                    </td>
                    <td>
                        <strong>A && B</strong>
                    </td>
                    <td>
                        <strong>A xor B</strong>
                    </td>
                </tr>
                <tr>
                    <td class="info">
                        <?php echo $a ?>
                    </td>
                    <td class="info">
                    <?php echo $a ?>
                    </td>
                    <td class='true'>
                    <?php
                        if (!$a == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='false'>
                      <?php
                        if (($a || $a) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='false'>
                        <?php
                        if (($a && $a) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='false'>
                    <?php
                        if (($a xor $a) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                </tr>
                <tr>
                    <td class="info">
                        <?php echo $a ?>
                    </td>
                    <td class="info">
                        <?php echo $b ?>
                    </td>
                    <td class='true'>
                    <?php
                        if (!$a == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='true'>
                      <?php
                        if (($a || $b) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='false'>
                        <?php
                        if (($a && $b) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='true'>
                    <?php
                        if (($a xor $b) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                </tr>
                <tr>
                    <td class="info">
                        <?php echo $b ?>
                    </td>
                    <td class="info">
                        <?php echo $a ?>
                    </td>
                    <td class='false'>
                    <?php
                        if (!$b == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='true'>
                      <?php
                        if (($b || $a) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='false'>
                        <?php
                        if (($b && $a) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='true'>
                    <?php
                        if (($b xor $a) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                </tr>
                <tr>
                    <td class="info">
                        <?php echo $b ?>
                    </td>
                    <td class="info">
                        <?php echo $b ?>
                    </td>
                    <td class='false'>
                    <?php
                        if (!$b == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='true'>
                      <?php
                        if (($b || $b) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='true'>
                        <?php
                        if (($b && $b) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                    <td class='false'>
                    <?php
                        if (($b xor $b) == false) {
                            echo $a;
                        } else {
                            echo $b;
                        }
                      ?>
                    </td>
                </tr>
        </table>
    </div>