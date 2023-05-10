<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
<form>
        <div>
            Alas
            <input type="text" id="txALAS" name="txALAS">
        </div>
        <div>
            Tinggi
            <input type="text" id="txTINGGI" name="txTINGGI">
        </div>
        <div>
            <button type="button" onclick="checkhasil()">CheckHasil</button>
        </div>
        <div id="hasil"></div>
    </form>
    <script>
        function checkhasil(){
        let alas = document.getElementById("txALAS").value;
        let tinggi = document.getElementById("txTINGGI").value;
        let  luas = 0.5 * alas * tinggi;
        document.getElementById("hasil").innerHTML = "luas segitiga: "+luas;
        alert("Hasil: "+luas);
    }
</script>
</body>
</html>