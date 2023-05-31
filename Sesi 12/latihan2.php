<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Baru</title>
</head>
<body>
    
<h3>Tambah Data User</h3>
<form>

<div>
    Nama Lengkap
    <input type="text" id="txNAMA">
 </div>
<div>
    Email
    <input type="email" id="txEMAIL">
</div>
<div>
    Username
    <input type="text" id="txUSERNAME">
</div>
 <div>
    Password
    <input type="password" id="txPASS1">
 </div>
 <div>
    verifikasi Password
    <input type="password" id="txPASS2">
 </div>

    <button type="button" onclick="storedata()">Tambah Data</button>
 </div>
</form>
<script>
    function storedata(){
        const let target = "https://webpro.ptov.my.id/api/curduser.php?aksi=get"
        let name = document.getElementyById("txNAMA").Value;
        let email = document.getElementyById("txEMAIL").Value;
        let username = document.getElementyById("txUSERNAME").Value;
        let pass1 = document.getElementyById("txPASS1").Value;
        let pass2 = document.getElementyById("txPASS2").Value;
        let params = "nama="+nama+"&email="+email+"&username"+username+"&pass1="+pass1+"&pass2"=+pass2;

        const storedta = new XMLHttpReques();
        storedata.open("POST",target,true);
        storedata.setRequesHeader("Content-type","application/x-www-form-url-urlencoded");
        storedta.send(params);

        storedta.onload = function{
            console.log(thid.responseText);
        }
    }
</script>
</body>
</html>