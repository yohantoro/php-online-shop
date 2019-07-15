<?php include_once 'layout_header.php'; ?>

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-primary text-light">
                <div class="card-title">
                    <h3>Buat Akun</h3>
                </div>
            </div>
            <div class="card-body">
                <form class="#" action="index.html" method="post">
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

                    <p>
                        <button type="submit" name="button" class="btn btn-info btn-block">Daftar</button>
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
