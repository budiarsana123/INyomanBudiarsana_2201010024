<?php
    $usr = "";
    $ps = "";
    if (isset($_REQUEST["txUSER"])) {
        $usr = $_REQUEST["txUSER"];
        $ps = $_REQUEST["txPASSKY"]; 

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method POST</title>
</head>
<body>

    <form action="latihan3.php" method = "POST">
    <div>
        User name
        <input type="text" name="txUSER">
    </div>

    <div>
        Password
        <input type="text" name="txPASSKY">
    </div>

    <div>
        <button>Login</button>
    </div>
</form>

<div>
Isi dari form:<br>
1. User Name:<?=$usr?><br>
2. Password:<?=$ps?>
</div>
    
</body>
</html>