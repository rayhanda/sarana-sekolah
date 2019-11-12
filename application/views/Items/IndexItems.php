<style>
    .align-middle {
        vertical-align: middle !important;
    }
</style>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Barang</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div id="pesan-error" class="alert alert-danger"></div>
            <form id="form-tambah">
                <div class="form-group">
                    <label>Item Code</label>
                    <input type="text" class="form-control" id="clear_code" name="item_code">
                </div>
                <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" class="form-control" id="clear_name" name="item_name">
                </div>
                <div class="form-group">
                    <label>Qty</label>
                    <input type="number" class="form-control" id="clear_qty" name="qty">
                </div>
            </form>
            <div class="row">
                <div class="col">
                    <div id="loading-simpan" class="pull-left">
                        <b>Sedang menyimpan...</b>
                    </div>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success float-right" id="btn-simpan">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div id="pesan-sukses" style="margin: 10px 20px;"></div>

            <div id="view" style="margin: 10px 20px;">
                <?php $this->load->view('Items/table', array('model' => $model));
                ?>
            </div>

        </div>
    </div>

</div>
<!-- ====================================== MODAL =============================================== -->
<div id="form-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">
                    <span id="modal-title"></span>
                </h4>
            </div>
            <div class="modal-body">
                <div id="pesan-error" class="alert alert-danger"></div>

                <form>
                    <div class="form-group">
                        <label>Item Code</label>
                        <input type="text" class="form-control" id="item_code" name="item_code" placeholder="Code Item">
                    </div>
                    <div class="form-group">
                        <label>Item Name</label>
                        <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name">
                    </div>
                    <div class="form-group">
                        <label>Qty</label>
                        <input type="number" class="form-control" id="qty" name="qty" placeholder="Item qty">
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <div id="loading-ubah" class="pull-left">
                    <b>Sedang mengubah...</b>
                </div>

                <!-- <button type="button" class="btn btn-primary" id="btn-simpan">Simpan</button> -->

                <button type="button" class="btn btn-primary" id="btn-ubah">Ubah</button>

                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>