<?php

if(isset($_POST["nambah"])){

$koneksi = mysqli_connect("localhost","root","","pokemon");

$nama = htmlspecialchars($_POST["name"]);
$str = htmlspecialchars ($_POST["str"]);
$def = htmlspecialchars($_POST["def"]);
function upload(){
    $namaFile = $_FILES["foto"]["name"];
    $ukuranFile = $_FILES["foto"]["size"];
    $error = $_FILES["foto"]["error"];
    $tmpName = $_FILES["foto"]["tmp_name"];

    if($error === 4 ){
        echo "<script> 
            alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiValid = ["jpg","png","jpeg"];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstensiValid)){
        echo "<script> 
            alert('Yang di upload bukan gambar');
        </script>";
        return false;
    }
    move_uploaded_file($tmpName,$namaFile);
    return $namaFile;
}
$gambar = upload();
if(!$gambar){
    echo "<script>
                alert('Pokemon Gagal Ditambah');
                document.location.href = 'index.php';
         </script>" ;
}




$masukan = "INSERT INTO pokemon_tb (name,str,def,photo) VALUES ('$nama', '$str', '$def', '$gambar')";
mysqli_query($koneksi, $masukan);

    if(mysqli_affected_rows($koneksi) >= 0){
        echo "<script>
                alert('Pokemon Berhasil Ditambah');
                document.location.href = 'index.php';
              </script>" ;
    }
    else{
        echo "<script>
                alert('Pokemon Gagal Ditambah');
                document.location.href = 'index.php';
              </script>" ;
    }

}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <form class="row row-cols-lg-auto g-3 align-items-center mt-5" action="" method="POST"> 
            <div class="col-12">
                <button type="submit" class="btn btn-success" name = "semua"><a href="index.php" style="color:white;text-decoration:none;">Tampilkan Semua</a></button>
            </div>
        </form>

        <form class="row g-3 mt-5" action ="" method ="POST" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama Pokemon</label>
                <input type="text" class="form-control" id="inputEmail4" name="name">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Id Element</label>
                <input type="text" class="form-control" id="inputPassword4" name ="str">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Def</label>
                <input type="text" class="form-control" id="inputPassword4" name="def">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">foto</label>
                <input type="file" class="form-control" id="inputPassword4" name ="foto">
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="nambah">Tambah</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>