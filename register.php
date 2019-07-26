<?php
include_once 'layout_header.php';

// echo "<pre>"; var_dump($_SESSION); exit;
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['type'] == 'member') {
        header('location: member');
    }
    if ($_SESSION['user']['type'] == 'admin') {
        header('location: admin');
    }
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary text-light">
                <div class="card-title">
                    <h3>Buat Akun</h3>
                </div>
            </div>
            <div class="card-body">
                <form class="#" action="user_act_register.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="email" name="email" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" value="" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">No. Telepon</label>
                                <input type="number" name="no_telp" value="" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="text" name="tgl_lahir" value="" class="form-control" required>
                                <small class="form-text text-muted">
                                    Format: tahun-bulan-tanggal. Contoh: 1945-08-17
                                </small>
                            </div>
                        </div>
                    </div>

                    <p>
                        <button type="submit" name="register" class="btn btn-info btn-block">Daftar</button>
                    </p>

                    <p>
                        Sudah punya akun? <a href="login.php">Masuk lewat sini</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'layout_footer.php'; ?>
