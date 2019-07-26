<?php

include_once 'layout_header.php';

$total = 0;
$subTotal = 0;
?>

<h3>Keranjang Belanja</h3>

<div class="row">
    <div class="col-md-8">
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']['barang']) > 0): ?>
        <table class="table table-bordered shadow-sm">
            <thead class="thead-dark text-center">
                <th>Barang</th>
                <th>Banyaknya</th>
                <th>Harga Satuan (Rp)</th>
                <th>Sub Total</th>
                <th></th>
            </thead>
            <tbody>
                    <?php foreach ($_SESSION['cart']['barang'] as $keranjang):
                        $subTotal = $keranjang['jumlah'] * $keranjang['harga'];
                        $total += $subTotal;
                    ?>
                        <tr>
                            <td><?= $keranjang['nama_barang'] ?></td>
                            <td class="text-center"><?= $keranjang['jumlah'] ?></td>
                            <td class="text-right">
                                <?= number_format($keranjang['harga'], 0, ',', '.') ?>
                            </td>
                            <td class="text-right">
                                <?= number_format($subTotal, 0, ',', '.') ?>
                            </td>
                            <td>
                                <a href="cart_act_remove.php?barang_id=<?= $keranjang['barang_id'] ?>">Hapus</a> 
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total (Rp)</th>
                    <td class="text-right"><?= number_format($total, 0, ',', '.') ?></td>
                </tr>
            </tfoot>
        </table>
        <?php else: ?>
            <div class="alert alert-secondary">
                Keranjang kosong.
            </div>
        <?php endif; ?>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                Informasi tambahan di sini
            </div>
        </div>
    </div>
</div>

<?php include_once 'layout_footer.php'; ?>
