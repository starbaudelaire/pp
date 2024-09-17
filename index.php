<?php 
echo "Hello World";
?>
<br>
<!-- shortcut php -->
 <?="alamak"?>
<br>
 <!-- fungsi date -->
  <body>
    <?php echo(date("d F Y ")); ?> <!-- pake kurung -->
  <br>
    <?php echo date("d F Y "); ?> <!-- gapake kurung -->
  <br>
  <br>
      <?php
        //Deklarasi variabel
      $tanggal = date ("d F Y");
      $nama = "Pelanggan Yang Terhormat" ;
        // Tampilkan
      echo("Pada $tanggal<br>");
      echo("$nama, Dimohon Untuk Perbarui Langganan Indihome");
      ?> 
  </body>