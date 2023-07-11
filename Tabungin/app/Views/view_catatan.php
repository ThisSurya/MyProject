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
    <div class="form">
      <h1>Tambah Catatan Keuangan</h1>
      <div class="container">
        <div class="row">
          <div class="col">
            <?= form_open('/catatan') ?>
            <div class="mb-3">
              <label for="nama_transaksi" style="font-size: 20px;" class="form-label">Nama</label>
              <br>
              <input type="text" size="80" style="padding: 5px; font-size:15px;" class="form-control" id="nama_transaksi" name="nama_transaksi" value="<?= set_value('nama_transaksi'); ?>">
              <div style="color: red; font-size: small;"> <?= $validation->getError('nama_transaksi') ?> </div>
            </div>
            <div class="mb-3">
              <label for="nominal" style="font-size: 20px;" class="form-label">Nominal</label>
              <br>
              <input type="text" size="80" style="padding: 5px; font-size:15px;" class="form-control" id="nominal" name="nominal" value="<?= set_value('nominal'); ?>">
              <div style="color: red; font-size: small;"> <?= $validation->getError('nominal') ?> </div>
            </div>
            <div class="mb-3">
              <label for="Tanggal" style="font-size: 20px;" class="form-label">Tanggal</label>
              <br>
              <input type="date" style="padding: 5px; font-size:15px;" class="form-control" id="Tanggal" name="Tanggal" value="<?= set_value('Tanggal'); ?>">
              <div style="color: red; font-size: small;"> <?= $validation->getError('Tanggal') ?> </div>
            </div>
            <div class="mb-3">
              <label for="kategori" style="font-size: 20px;" class="form-label">Kategori</label>
              <br>
              <select style="padding: 5px; font-size:15px;" name="kategori" id="kategori">
                <option value="1" style="font-size: 17px;">Pemasukkan</option>
                <option value="2" style="font-size: 17px;">Pengeluaran</option>
              </select>
            </div>
            <button type="submit" style="padding: 15px; width:100%; font-size:25px; margin-top:15px; color:#fff; background-color: #1B5231;" class="btn btn-primary">Tambah Catatan</button>
            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </div>
</div>
</div>
</div>
</body>

</html>
<?= $this->endSection() ?>