<?php

require_once __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/HTML.php';

use Curl\RSS;

header('Content-Type: application/json');
$curl = new RSS;

if (isset($_REQUEST['url'])) {
  $url = trim($_REQUEST['url']);
} else {
  $url = "https://web-manajemen.blogspot.com/rss.xml?redirect=false";
}

$curl->set_url($url);
$curl->fetch_rss();

$rss = $curl->rss;
$json = [];
foreach ($rss->channel->item as $r) {
  $published = $r->pubDate;
  $title = $r->title;
  $content = $r->description;
  $link = $r->link;
  $r->guid = md5($r->guid);
  $r->pubDate = date('D, d M Y H:i:s', strtotime($r->pubDate));
  $r->author = "dimaslanjaka@gmail.com (Dimas Lanjaka)";
  $json[] = $r;
  $html = str_get_html($content);
  if (count($html->find("img")) > 0 && $html->find("img", 0)->src) {
    $r->thumbnail = $html->find("img", 0)->src;
  } else {
    $r->thumbnail = 'https://1.bp.blogspot.com/-rkXCUBbNXyw/XfY0hwoFu5I/AAAAAAAAAhw/BUyeKW5BtMoIJLlPUcPSdqGZBQRncXjDQCK4BGAYYCw/s600/PicsArt_09-09-12.12.25.jpg';
  }
}

echo json_encode($json, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
