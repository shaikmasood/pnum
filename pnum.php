<?php 
/*
 * @File - pnum.php
 * @Description - primary number file which loads pnclass.php file prints out a multiplication table of the N prime numbers.
 * @Param - Primar number count limit
 * @Date - 2019-04-28
 */

include 'pnclass.php';
$obj = new Pnclass();

if(PHP_SAPI === "cli")
{
    $pLimit = $argv[1];
}
else 
{
    $pLimit = (isset($_GET['count']))?($_GET['count']):('10');
}

$obj->main($pLimit);
?>