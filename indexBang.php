<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pertemuan 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success-subtle">
  <div class="container my-5 bg-success rounded px-3 pt-3 pb-5 text-white">
    <h1>Pertemuan 1</h1>
    <form action="kirimBang.php" method="post">
      <!-- Nama -->
      <div class="mb-3">
        <label for="nama" class="form-label">Nama : </label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <!-- Password -->
      <div class="mb-3">
        <label for="pass" class="form-label">Password : </label>
        <input type="password" class="form-control" id="pass" name="pass">
      </div>
      <!-- Select -->
      <div class="mb-3">
        <label for="age">Age Range : </label>
        <select class="form-select" aria-label="Default select example" id="age" name="age">
          <option value="16-30" selected>16-30</option>
          <option value="30-40">30-40</option>
          <option value="40-50">40-50</option>
        </select>
      </div>
      <!-- Life Story -->
      <div class="mb-3">
        <label for="life">Life Story : </label>
        <textarea class="form-control" placeholder="Enter your life story" id="life" name="life"></textarea>
      </div>
      <!-- button -->
      <input class="btn btn-light w-100" type="submit"></input>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>