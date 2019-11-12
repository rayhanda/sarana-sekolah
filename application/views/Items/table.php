<div class="table-responsive">
    <table class="table table-bordered" id="mydata">
        <thead>
            <tr>
                <th class="text-center">NO</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Qty</th>
                <th class="text-center"><span class="fa fa-cog"></span></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th class="text-center">NO</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Qty</th>
                <th class="text-center"><span class="fa fa-cog"></span></th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $no = 1;
            foreach ($model as $data) :
                ?>
                <tr>
                    <td class="align-middle text-center"><?= $no; ?></td>
                    <td class="align-middle"><?= $data->item_code; ?></td>
                    <td class="align-middle"><?= $data->item_name; ?></td>
                    <td class="align-middle"><?= $data->qty; ?></td>
                    <td class="align-middle text-center">
                        <a href="javascript:void();" data-id="<?= $data->id; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-warning btn-form-ubah"><span class="fa fa-pen"></span></a>
                        <input type="hidden" class="item_code" value="<?php echo $data->item_code; ?>">
                        <input type="hidden" class="item_name" value="<?php echo $data->item_name; ?>">
                        <input type="hidden" class="qty" value="<?php echo $data->qty; ?>">
                        <a href="javascript:void();" data-id="<?= $data->id; ?>" onClick="functionHapus()" class="btn btn-danger btn-alert-hapus"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php
                $no++;
            endforeach;
            ?>
        </tbody>
    </table>
</div>