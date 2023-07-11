<?php
helper('form');
$validation = \Config\Services::validation();
?>
<?= $this->extend('components/layout') ?>

<?= $this->section('content') ?>
<div class="main_content">
    <div class="header">
        <div class="imgp">
            <img src="image/profile.png" />
            <!-- div p2 -->
        </div>
        <div class="p2">
            <p>NAMA PENGGUNA</p>
            <p>akunpengguna@gmail.com</p>
        </div>
    </div>
    <div class="info">
        <div class="editProfile">
            <div class="container" style="width: 30%;">
                <div class="row">
                    <div class="col">
                        <?= form_open('/updateProfile') ?>
                        <div class="mb-3">
                            <label for="username" style="font-size: 20px;" class="form-label">Nama</label>
                            <input type="username" style="padding: 5px; font-size:15px;" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?= $Table->username; ?>">
                            <div style="color: red; font-size: small;"> <?= $validation->getError('username') ?> </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" style="font-size: 20px;" class="form-label">Email</label>
                            <input type="text" style="padding: 5px; font-size:15px;" class="form-control" id="email" name="email" value="<?= $Table->email; ?>" aria-describedby="emailHelp">
                            <div style="color: red; font-size: small;"> <?= $validation->getError('email') ?> </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" style="font-size: 20px;" class="form-label">Password</label>
                            <input type="password" style="padding: 5px; font-size:15px;" class="form-control" id="password" name="password">
                            <div style="color: red; font-size: small;"> <?= $validation->getError('password') ?> </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" style="font-size: 20px;" class="form-label">Konfirmasi password</label>
                            <input type="password" style="padding: 5px; font-size:15px;"  class="form-control" id="confirmation" name="confirmation">
                            <div style="color: red; font-size: small;"> <?= $validation->getError('confirmation') ?> </div>
                        </div>
                        <button type="submit" style="padding: 15px; width:100%; font-size:25px; margin-top:15px; color:#fff; background-color: #1B5231;" class="btn btn-primary">Simpan</button>
                        <?= form_close(); ?>
                    </div>
                    <div class="col2">
                        <div class="imgp">
                            <img src="image/profile.png" />
                            <!-- div p2 -->
                        </div>
                        <div class="p2">
                            <p>NAMA PENGGUNA</p>
                            <p>akunpengguna@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<?= $this->endSection() ?>