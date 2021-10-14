<?php 

$sumber = "https://covid19.kuningankab.go.id/api/latest-full-v2";
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
// var_dump($data);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>API Covid Kuningan</title>
  </head>
  <body>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>API Covid</title>
  </head>
  <body>
    <div class="judul text-center">
      <h1 class="mt-4 fs-4">UPDATE PERKEMBANGAN COVID-19</h1>
      <h2 class="fs-4">DI KABUPATEN KUNINGAN</h2>
    </div>

   <?php foreach($data as $dt) :?>
    <h3 class="fs-4 text-center"><?php echo $dt["field_covid19_tanggal_update"]; ?></h3>

    <!-- Container -->
    <div class="container mt-5 border border-secondary">
      <h4 class="text-center mt-3">KASUS RAPID POSITIF</h4>
      
      <div class="d-flex justify-content-center mt-3">
        <p class="bg-primary">Total</p><span><?php echo $dt["field_rapid_positif_total"]; ?></span>
      </div>
      <div class="d-flex justify-content-center">
        <p class="bg-primary">Sembuh</p> <span><?php echo $dt["field_rapid_positif_sembuh"]; ?></span>
      </div>
      <div class="d-flex justify-content-center">
       <p class="bg-primary">Karantina</p><span><?php echo $dt["field_rapid_positif_karantina"]; ?></span>
      </div>
      <div class="d-flex justify-content-center">
        <p class="bg-primary">Meninggal</p><span><?php echo $dt["field_rapid_positif_meninggal"]; ?></span>
      </div>

      <h4 class="text-center mt-3">KASUS KONFIRMASI</h4>
      <div class="d-flex justify-content-center mt-3">
        <p class="bg-primary">Total</p><span><?php echo $dt["field_konfirmasi_total"]; ?></span>
      </div>
      <div class="d-flex justify-content-center">
        <p class="bg-primary">Discarded</p> <span><?php echo $dt["field_konfirmasi_discarded"]; ?></span>
      </div>
      <div class="d-flex justify-content-center">
       <p class="bg-primary">Karantina</p><span><?php echo $dt["field_konfirmasi_karantina"]; ?></span>
      </div>
      <div class="d-flex justify-content-center">
        <p class="bg-primary">Meninggal</p><span><?php echo $dt["field_konfirmasi_meninggal"]; ?></span>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>