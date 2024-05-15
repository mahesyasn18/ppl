<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-center">
        <a class="navbar-brand" href="#">Toko Online</a>
    </div>
    </nav>
    <div class="container-fluid px-5">

        <h1 class="mt-2">Daftar Barang</h1>
        <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-md-2 col-sm-6">
                <div class="card ml-2 mt-2" >
                    <img src="/uploads/<?= $brg['photo'] ?>" alt="<?= $brg['nama_barang'] ?>" class="card-img-top" style="width: 100px; height: auto;" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $brg['nama_barang'] ?></h5>
                        <p class="card-text"><?= $brg['harga'] ?></p>
                        <a href="#" class="btn btn-primary">Masukkan Ke Keranjang</a>
                    </div>
                </div>
            </div>     
        
        <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>