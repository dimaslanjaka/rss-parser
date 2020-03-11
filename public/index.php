<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Curl\RSS;

header('Content-Type: application/json');
$curl = new RSS;
$curl->set_url("https://web-manajemen.blogspot.com/rss.xml?redirect=false");
$curl->fetch_rss();

$rss = $curl->rss;
//var_dump($rss->channel->item, $rss);
foreach ($rss->channel->item as $r) {
  $published = $r->pubDate;
  $title = $r->title;
  $content = $r->description;
  $link = $r->link;
  var_dump($r);
  exit;
}
