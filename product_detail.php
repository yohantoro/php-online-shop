<?php include_once 'layout_header.php'; ?>

<h3>Detail Produk</h3>
<div class="row">
    <div class="col-md-8">
        <div class="card shadow-sm mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/images/products/1bw_sporty.jpg" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-8">
                        <h4>Nama Produk</h4>
                        <p>
                            <small class="text-secondary">
                                <em>Fashion > Pakaian > Pakaian Pria</em>
                            </small>
                        </p>
                        <hr>
                        <h2 class="text-danger"><strong>Rp200.000</strong> </h2>

                        <p>
                            50 stok tersedia
                        </p>

                        <form action="#" method="post">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <button type="button" id="decrease" class="btn input-group-text">-</button>
                                </div>
                                <input type="text" name="item-quantity" class="form-control" id="item-quantity-id" value="1">
                                <div class="input-group-append">
                                    <button type="button" id="increase" class="btn input-group-text">+</button>
                                </div>
                            </div>
                            <p>
                                <button type="button" name="button" class="btn btn-success">Beli Sekarang!</button>
                                <button type="button" name="button" class="btn btn-light">Tambah ke keranjang</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="text-center">Detail Barang</h4>

                <dl class="row">
                    <dt class="col-md-2">Deskripsi</dt>
                    <dd class="col-md-10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </dd>
                    <dt class="col-md-2">Catatan</dt>
                    <dd class="col-md-10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <dl class="row">
                    <dt class="col-md-3">Vendor</dt>
                    <dd class="col-md-9">ADADIS</dd>
                    <dt class="col-md-3">Dilihat</dt>
                    <dd class="col-md-9">1402 kali</dd>

                </dl>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
var itemQuantity = $('#item-quantity-id').val();

$('#decrease').on('click', function (e) {
    itemLimit();
    $('#item-quantity-id').val(itemQuantity - 1);
    console.log(itemQuantity);
});

$('#increase').on('click', function (e) {
    itemLimit();
    $('#item-quantity-id').val(itemQuantity + 1);
    console.log(itemQuantity);
});

function itemLimit() {
    if (itemQuantity <= 1) {
        return false;
    }
}
</script>

<?php include_once 'layout_footer.php'; ?>
