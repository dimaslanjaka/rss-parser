<?php

namespace Curl;

class RSS extends Curl
{
  private $initrss;
  public $urlrss;
  public $rss;

  public function __construct($base = null)
  {
    $this->initrss = new Curl($base);
  }

  public function set_url($url)
  {
    $this->urlrss = $url;

    return $this;
  }

  public function fetch_rss()
  {
    $this->initrss->get($this->urlrss);
    $this->rss = $this->initrss->response;
    return $this->rss;
  }
}
