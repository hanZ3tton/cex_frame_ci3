<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('upload_photo')) {
  function upload_photo($field, $config = [])
  {
    $CI = &get_instance(); // ambil instance CI

    // default config
    $default_config = [
      'upload_path'   => FCPATH . 'uploads/', // lebih aman pakai FCPATH
      'allowed_types' => 'jpg|jpeg|png',
      'max_size'      => 5120, // 5 MB
      'encrypt_name'  => TRUE
    ];

    $config = array_merge($default_config, $config);

    $CI->load->library('upload');
    $CI->upload->initialize($config);

    if ($CI->upload->do_upload($field)) {
      return $CI->upload->data('file_name');
    }

    return false; // gagal upload
  }
}
