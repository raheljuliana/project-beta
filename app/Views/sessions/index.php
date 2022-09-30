<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">>
<style>
  .bg-kanan {
    background-image: url('/images/foto.jpg');
    background-size: cover;
  }
  
  </style>
  </head>

  <body>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="container mt-5">
          <?php foreach (session()->getFlashdata() as $key => $flash) : ?>
            <div class="alert alert-<?= $key ?>" role="alert">
            <?= $flash ?>
            </div>
            <?php endforeach; ?>
          <form action="/sessions" method="post">
            <div class="mb-3">
              <label for="exampleFormControlINput1" class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" name="password" id="password" placeholder="password">
</div>
<div class="mb-3">
  <input type="submit" value="Masuk" class="btn btn-secondary">
</div>
</form>
</div>
</div>
<div class="col-md-6 d-none d-md-block bg-kanan" style="height: 100vh">
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>