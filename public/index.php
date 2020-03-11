<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Curl\RSS;

$curl = new RSS;
$curl->set_url("https://web-manajemen.blogspot.com/rss.xml?redirect=false");
$curl->fetch_rss();