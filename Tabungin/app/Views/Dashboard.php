<?php
  $sess = session();
  $data = $sess->get('currentuser')['email'];
  $date = date('Y-m-d');
  $yesterdaydate = date('Y-m-d', strtotime('-1 day', strtotime($date)));
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
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Hallo selamat datang! <?= $data; ?> </h1>
                <a href="/updateProfile" class="btn btn-primary">Update your account</a>
                <a href="/catatan" class="btn btn-"> Tambah Catatan</a>
                <table class="table">
                  <thead>
                    <tr>
                      <td>Tanggal: <?= $date; ?></td>
                    </tr>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama transaksi</th>
                      <th scope="col">kategori</th>
                      <th scope="col">nominal</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">option</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 0; $Hasil = 0; foreach($todayTable as $key): $no++;?>
                    <tr>
                      <td><?=$no;?></td>
                      <td><?= $key->nama_transaksi; ?></td>
                      <td><?= $key->kategori; ?></td>
                      <td><?= $key->nominal; ?></td>
                      <td><?= $key->Tanggal; ?></td>
                      <td><a href="/updateLaporan/<?= $key->Transaksi_id; ?>" class="btn btn-secondary">Edit</a></td>
                    </tr>
                    <?php $Hasil += $key->nominal;?>
                  <?php endforeach; 
                  if($Hasil <= 0){
                    $Hasil = 0;
                  }
                  ?>
                  <tr>
                    <td scope=""><?= $Hasil; ?></td>
                    <?php
                    $Hasil = 0;
                    foreach($todayTable as $key){
                      if($key->nominal > 0){
                        $Hasil += $key->nominal;
                      }
                    }?>
                    <td scope="">Pemasukkan: <?= $Hasil; ?></td>
                    <?php 
                    $Hasil = 0;
                    foreach($todayTable as $key){
                      if($key->nominal < 0){
                        $Hasil += abs($key->nominal);
                      }
                    }?>
                    <td scope="">Pengeluaran: <?= $Hasil; ?></td>
                  </tr>
                  </tbody>
                  <thead>
                    <tr>
                      <td>Tanggal kemarin: <?= $yesterdaydate; ?></td>
                    </tr>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama transaksi</th>
                      <th scope="col">kategori</th>
                      <th scope="col">nominal</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">option</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 0; $Hasil = 0; foreach($yesterdayTable as $key): $no++;?>
                    <tr>
                      <td><?=$no;?></td>
                      <td><?= $key->nama_transaksi; ?></td>
                      <td><?= $key->kategori; ?></td>
                      <td><?= $key->nominal; ?></td>
                      <td><?= $key->Tanggal; ?></td>
                      <td><a href="/updateLaporan/<?= $key->Transaksi_id; ?>" class="btn btn-secondary">Edit</a></td>
                    </tr>
                    <?php $Hasil += $key->nominal;?>
                  <?php endforeach; ?>
                  <tr>
                    <td scope=""><?= $Hasil; ?></td>
                    <?php
                    $Hasil = 0;
                     foreach($yesterdayTable as $key){
                      if($key->nominal > 0){
                        $Hasil += $key->nominal;
                      }
                    }?>
                    <td scope="">Pemasukkan: <?= $Hasil; ?></td>
                    <?php 
                    $Hasil = 0;
                    foreach($yesterdayTable as $key){
                      if($key->nominal < 0){
                        $Hasil += abs($key->nominal);
                      }
                    }?>
                    <td scope="">Pengeluaran: <?= $Hasil; ?></td>
                  </tr>
                  </tbody>
                </table>
                <a href="/logout" class="btn btn-danger">logout</a>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>