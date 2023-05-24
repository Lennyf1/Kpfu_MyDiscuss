<?php
require('themes_db.php');
$now = date('j');

settype($now, 'integer');
$idi = $_GET['topic_id'] . $now;
$quest = get_topic_quest($idi);
$img_url = get_img_url($idi);
$titlek = get_topic_title($idi);
$question = get_topic_quest($idi);
$datek = get_topic_date($idi);


//$vid = $id- 1;
//var_dump($vid);
// $product_class = 'item';

require('db/chat.php');
?>