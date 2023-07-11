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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="width: 30%;">
        <div class="row">
            <div class="col">
            <?= form_open('/add_User')?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" class="form-control" id="username" name="username" 
                    aria-describedby="emailHelp" value="<?= set_value('username'); ?>">
                    <div style="color: red; font-size: small;"> <?=$validation->getError('username')?> </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email"
                    value="<?= set_value('email'); ?>" aria-describedby="emailHelp">
                    <div style="color: red; font-size: small;"> <?=$validation->getError('email')?> </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <div style="color: red; font-size: small;"> <?=$validation->getError('password')?> </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">konfirmasi password</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation">
                    <div style="color: red; font-size: small;"> <?=$validation->getError('confirmation')?> </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            <?= form_close(); ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>