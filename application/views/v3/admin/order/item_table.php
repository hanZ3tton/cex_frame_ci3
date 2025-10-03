 <?php foreach ($detail_item as $item) : ?>
     <tr>
         <td class="text-start">
             <div class="d-flex justify-content-end gap-2">
                 <a
                     href="<?= base_url('v3/admin/order/delete_detail_item/' . $item->cleansing_code . '/' . $item->code) ?>"
                     class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                     <i class="ki-duotone ki-trash fs-2">
                         <span class="path1"></span>
                         <span class="path2"></span>
                         <span class="path3"></span>
                         <span class="path4"></span>
                         <span class="path5"></span>
                     </i>
                 </a>
             </div>
         </td>
         <td class="text-start"><?= $item->cleansing_code ?></td>
         <td><?= $item->goods_type ?></td>
         <td><?= $item->goods_category ?></td>
         <td><?= $item->qty ?></td>
         <td><?= $item->price ?></td>
         <td><?= $item->qty *  $item->price ?></td>

     </tr>
 <?php endforeach; ?>