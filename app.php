<?php

require_once('params.php');

if (isset($_POST['bottles']) && $_POST['bottles']>0) {
    if ($_POST['bottles'] > $bigbox) {
        $countbottles = $_POST['bottles'] % $bigbox;
        if ($countbottles == 0 && $_POST['bottles']>$bigbox) {
            echo ''.(intdiv($_POST['bottles'],$bigbox)).'ящиков по '.$bigbox.' бут';
        } elseif ($countbottles > $minibox && $countbottles <= $mediumbox) {
            echo ''.(intdiv($_POST['bottles'],$bigbox)).'ящиков по '.$bigbox.' бут. и 1 ящик по '.$mediumbox.' бут.';
        } elseif ($countbottles > $mediumbox) {
            echo ''.(intdiv($_POST['bottles'],$bigbox)+1).'ящиков по '.$bigbox.'  бут';
        } else {
            echo ''.(intdiv($_POST['bottles'],$bigbox)).'ящиков по '.$bigbox.'  бут. и 1 ящик по '.$minibox.' бут.';
        };
    } else {
        if ($_POST['bottles'] > $mediumbox) {
            echo '1 ящик по '.$bigbox.' бут.';
        } elseif ($_POST['bottles'] <= $minibox) {
            echo '1 ящик по '.$minibox.' бут.';
        } else {
            echo '1 ящик по '.$mediumbox.'  бут.';
        }
    }
}