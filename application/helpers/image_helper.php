<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('render_image_input')) {
  function render_image_input($title, $field_name, $file_name = null)
  {
    $CI = &get_instance();
    $image_url = $file_name ? base_url('uploads/' . $file_name) : base_url('assets/media/svg/files/blank-image.svg');
?>
    <div class="card card-flush py-4 mb-6 mt-5">
      <div class="card-header">
        <div class="card-title">
          <h2><?= $title ?></h2>
        </div>
      </div>

      <div class="card-body text-center pt-0">
        <style>
          .image-placeholder-<?= $field_name ?> {
            background-image: url("<?= $image_url ?>");
          }

          [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url("<?= base_url('assets/media/svg/files/blank-image-dark.svg') ?>");
          }
        </style>

        <div class="image-input image-input-empty image-input-outline image-placeholder-<?= $field_name ?> mb-3"
          data-kt-image-input="true">

          <div class="image-input-wrapper w-150px h-150px"></div>

          <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
            data-kt-image-input-action="change" data-bs-toggle="tooltip"
            title="Change image">
            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
            <input type="file" name="<?= $field_name ?>" accept=".png, .jpg, .jpeg">
            <input type="hidden" name="avatar_remove">
          </label>

          <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
            title="Cancel image">
            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
          </span>

          <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
            title="Remove image">
            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
          </span>
        </div>

        <div class="text-muted fs-7">
          Set the package image. Only *.png, *.jpg and *.jpeg image files are accepted.
        </div>
      </div>
    </div>
<?php
  }
}
