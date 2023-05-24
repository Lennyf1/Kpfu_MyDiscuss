<?php
require('themes_db.php');
$now = date('j');

settype($now, 'integer');
$back = $now - 1;
$idi = $_GET['topic_id'] . $back;
$quest = get_topic_quest($idi);
$img_url = get_img_url($idi);
$titlek = get_topic_title($idi);
$question = get_topic_quest($idi);
$datek = get_topic_date($idi);
$prev = 'previous';

require('chat1.php');
?>