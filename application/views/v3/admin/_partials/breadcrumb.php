<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
  <!--begin::Item-->
  <li class="breadcrumb-item text-muted">
    <a href="<?= base_url('admin/dashboard') ?>" class="text-muted text-hover-primary">Home</a>
  </li>
  <!--end::Item-->
  <!--begin::Item-->
  <li class="breadcrumb-item">
    <span class="bullet bg-gray-500 w-5px h-2px"></span>
  </li>
  <!--end::Item-->
  <?php if (isset($breadcrumb)) : ?>
    <?php $count =  count($breadcrumb);
    $i = 0; ?>
    <?php foreach ($breadcrumb as $item) : $i++; ?>
      <li class="breadcrumb-item text-muted"><?= $item ?></li>
      <?php if ($i < $count) : ?>
        <li class="breadcrumb-item">
          <span class="bullet bg-gray-500 w-5px h-2px"></span>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>