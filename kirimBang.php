<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Kirim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success-subtle">
  <div class="container my-5 bg-success rounded px-3 pt-3 pb-5 text-white">
    <h1>Pertemuan 1</h1>
    <div class="col gap-2">
    <?php
    $nama = $_POST["nama"];
    $pass = $_POST["pass"];
    $age= $_POST["age"];
    $life= $_POST["life"];
    ?>
      <p>Nama : <?=$nama ?> </p>
      <p>Password : <?=$pass ?> </p>
      <p>age : <?=$age ?> </p>
      <p>Life Story : <?=$life ?> </p>
      <p>Fav</p>
      <p>Lang</p>
    </div>

    <a href="indexBang.php"><button class="btn btn-light w-100">Kembali</button></a>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>