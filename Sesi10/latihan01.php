<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
<form name="latihan1" method="POST" onsubmit="return checkform(this)">

    <div>
        NAMA
        <input type="text" name="txNAMA" id="NAMA"></input>
    </div>
    <div>
        NIM
        <input type="text" name="txNIM" id="NIM"></input>
    </div>
    <div>
        KELAS
        <input type="text" name="txKELAS" id="KELAS"></input>
    </div>
    <div>
        JENIS KELAMIN
        <input type="radio" name="txJKEL" id="JKEL" value="L">Laki-Laki</input>
        <input type="radio" name="txJKEL" id="JKEL" value="P">Perempuan</input>
    </div>
    <div>
       JURUSAN
        <select name="txJURUSAN" id=JURUSAN>
            <option value="Tata Boga">Tata Boga</option>
            <option value="Tata Busana">Tata Busana</option>
            <option value="Tata Mesin">Tata Mesin</option>
            <option value="Tata Elektro">Tata Elektro</option>
            <option value="Tata Multimedia">Tata Multimedia</option>
        </select>
    </div>
    <div>
       HOBI
        <input type="checkbox" name="txHOBI_MANCING">Mancing
        <input type="checkbox" name="txHOBI_NYANYI">Nyanyi
        <input type="checkbox" name="txHOBI_LARI">Lari
        <input type="checkbox" name="txHOBI_MELAYANGAN">Melayangan
    <div>
        <button type="submit"> kirim Data </button>
    </div>
</form>
<script>
    function checkform(frm){
        let F = frm.elements;
        let nama = F.namedItem("txNAMA").value;
        let nim = F.namedItem("txNIM").value;
        let kelas = F.namedItem("txKELAS").value;
        let jurusan = F.namedItem("txJURUSAN").value;
        let jeniskelamin = F.namedItem("txJKEL") .value;
        let hobi = [
        F.namedItem("txHOBI_MANCING").checked,
        F.namedItem("txHOBI_NYANYI").checked,
        F.namedItem("txHOBI_LARI").checked,
        F.namedItem("txHOBI_MELAYANGAN").checked,
        ]



        console.log("NAMA           : "+nama);
        console.log("NIM            : "+nim);
        console.log("KELAS          : "+kelas);
        console.log("JURUSAN        : "+jurusan);
        console.log("HOBI           : "+hobi);
        console.log("JENIS KELAMIN  : "+jeniskelamin);
        return false;
    }
</script>

</body>
</html>