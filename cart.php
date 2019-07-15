<?php include_once 'layout_header.php'; ?>

<h3>Keranjang Belanja</h3>
<div class="row">
    <div class="col-md-8">
        <table class="table table-bordered shadow-sm">
            <thead class="thead-dark">
                <th>Item</th>
                <th>Banyaknya</th>
                <th>Harga (Rp)</th>
            </thead>
            <tbody>
                <tr>
                    <td>Kaos Putih ADADIS</td>
                    <td class="text-center">5</td>
                    <td class="text-right">500.000</td>
                </tr>
                <tr>
                    <td>Jam Tangan Relox KW</td>
                    <td class="text-center">1</td>
                    <td class="text-right">200.000</td>
                </tr>
                <tr>
                    <td>Obat Sakit Kepala Paramore</td>
                    <td class="text-center">1</td>
                    <td class="text-right">3.500</td>
                </tr>
                <tr>
                    <td>Smartphone Wuahei</td>
                    <td class="text-center">1</td>
                    <td class="text-right">1.500.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2" class="text-right">Total (Rp)</th>
                    <td class="text-right">2.203.500</td>
                </tr>
            </tfoot>
        </table>
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
