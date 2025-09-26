<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('load_page__assets')) {
  function load_page__assets($ci, $path)
  {
    $ci->config->load("assets/$path");
    $page_assets = $ci->config->item('assets');
    $ci->pageScripts = $page_assets['js'];
    $ci->pageStyles = $page_assets['css'];
  }
}
