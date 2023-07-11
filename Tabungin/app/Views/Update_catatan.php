<?php
  helper('form');
  $validation = \Config\Services::validation();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Update catatan</h1>
    <?= $validation->listErrors(); ?>
    <div class="container">
      <div class="Row">
        <div class="col">
        <?= form_open('/updateData')?>
          <input type="hidden" value="<?= $id ?>" name="id">
          <div class="mb-3">
              <label for="nama_transaksi" class="form-label">nama_transaksi</label>
              <input type="text" class="form-control" id="nama_transaksi" name="nama_transaksi" value="<?= $nama_transaksi; ?>">
              <div style="color: red; font-size: small;"> <?=$validation->getError('nama_transaksi')?> </div>
          </div>
          <div class="mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <select name="kategori" id="kategori" value="<?= $nama_transaksi; ?>">
                <option value="1">Pemasukkan</option>
                <option value="2">Pengeluaran</option>
              </select>
          </div>
          <div class="mb-3">
              <label for="nominal" class="form-label">nominal</label>
              <input type="text" class="form-control" id="nominal" name="nominal" value="<?= $nominal; ?>">
              <div style="color: red; font-size: small;"> <?=$validation->getError('nominal')?> </div>
          </div>
          <div class="mb-3">
              <label for="Tanggal" class="form-label">Tanggal</label>
              <input type="date" class="form-control" id="Tanggal" name="Tanggal" value="<?= $Tanggal; ?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      	<?= form_close(); ?>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>