<?php
include('db_conn.php'); 
if(isset($_POST['nondp'])) {    
    $id = $_POST['id'];
    $nondp = $_POST['nondp'];
    $namapelajar= $_POST['namapelajar'];
    $nokp = $_POST['nokp'];
	$jantina = $_POST['jantina'];
    $nohp = $_POST['nohp'];
    $sql = "INSERT INTO info_pelajar (id, nondp, namapelajar, nokp, jantina, nohp)
    VALUES ('$id', '$nondp', '$namapelajar', '$nokp', '$jantina', '$nohp')";
    $result = mysqli_query($conn, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{background-color: #567189;}
    tr,td{background-color: #CFB997;}

   </style>
    
</head>
<body>
    <center>
    <form action="tambahpelajar.php" method="POST">
        <table>
        <caption>TAMBAH PELAJAR</caption>
            <tr>
                <td class=warna> Id </td>
                <td> <input type="text" name="id" placeholder="no" required> </td>
            </tr>
            <tr>
                <td class=warna> Nombor NDP </td>
                <td> <input type="text" name="nondp" placeholder="123456" required> </td>
            </tr>
            <tr>
                <td class=warna> Nama Pelajar </td>
                <td> <input type="text" name="namapelajar" placeholder="nama" required></td>
            </tr>
            <tr>
                <td class=warna> Nombor KP</td>
                <td> <input type="text" name="nokp" placeholder="020108010509" required></td>
            </tr>
            <tr>
                <td class=warna> Jantina</td>
                <td> <select name="jantina" id="jantina" required>
                    <option selected value="">-Select-</option>
                    <option value="lelaki">Lelaki</option>
                    <option value="perempuan">Perempuan</option>
                </select> </td>
            </tr>
            <tr>
                <td class=warna> Nombor Telefon</td>
                <td> <input type="text" name="nohp" placeholder="0179999058" required></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    </center>
</body>
</html>