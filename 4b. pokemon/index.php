<?php

$koneksi = mysqli_connect("localhost","root","","pokemon");


$semuaBuku = "SELECT * FROM pokemon_tb";
$kumpulan = mysqli_query($koneksi, $semuaBuku);
$isi = [];
    while($data = mysqli_fetch_assoc($kumpulan)){
            $isi[] = $data;
        }
$tampilanss = "SELECT * FROM pokemon_tb INNER JOIN element_tb 
               ON pokemon_tb.str=element_tb.id";
$kumpulanss = mysqli_query($koneksi, $tampilanss);
$isiss = [];
    while($data = mysqli_fetch_assoc($kumpulanss)){
        $isiss[] = $data;
    }


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <form class="row row-cols-lg-auto g-3 align-items-center mt-5" action="" method="POST"> 
            <div class="col-12">
                <button type="submit" class="btn btn-success" name = "semua"><a href="tambah.php" style="color:white;text-decoration:none;">Menambah Pokemon</a></button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-warning" name="tambah"><a href="element.php" style="color:white;text-decoration:none;">Menambah Element</a></button>  
            </div>
        </form>
        
       
       
            <div class="row mt-5">
                <h1>Pokemon Finds</h1>
            </div>
            <div class="row">
                <?php $j = 0; ?>  
                    <?php while($j < count($isiss)) {?>
                       
                            <div class="col mb-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="<?= $isiss[$j]["photo"];?>" class="card-img-top" width="50px" height="200px">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $isiss[$j]["name"] ?></h5>
                                    </div>
                                    <div class="card-body justify-content-center"> 
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-primary" name="pinjam"><?= $isiss[$j]["nama"] ?></button>
                                            <button type="button" class="btn btn-success" name="balik"><?= $isiss[$j]["def"] ?></button>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    <?php $j++; ?>
                <?php }; ?>
             </div>    
    </div>
    


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>