<?php
    $nvar = "P2";
    if(isset($_GET["pg"])){
    $nvar = $_GET["pg"];
    }
    switch($nvar){
        case "P1":
            $judulpage = "Halaman 1";
            $konten = "<h3>halaman 1 </h3>";
            break;
        case "P2":
            $judulpage = "Halaman 2";
            $konten = "<h3>halaman 2 </h3>";
            break;
        case "P3":
            $judulpage = "Halaman 3";
            $konten = "<h3>halaman 3 </h3>";
            break;
        case "P4":
            $judulpage = "Halaman 4";
            $konten = "<h3>halaman 4 </h3>";
            break;
        default:
            $judulpage = "Halaman 5";
            $konten = "<h3>halaman 5 </h3>";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $judulpage; ?></title>
</head>
<body>
    <a href="Latihan03.php?pg=P1">Page 1</a> 
    <a href="Latihan03.php?pg=P2">Page 2</a> 
    <a href="Latihan03.php?pg=P3">Page 3</a> 
    <a href="Latihan03.php?pg=P4">Page 4</a> 
   <?php
        echo $konten;

    ?>
</body>
</html>