<html>
<head>
    <title>Data Konsumen</title>
</head>
<body>
    <h2 align="center">Data Konsumen<h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" id="tgl_lahir" name="tgl_lahir" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea id="alamat" name="alamat" rows="5" cols="25" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"> 
                <input type="reset" name="reset" value="Reset"></td>
            </tr>
    </table>
</form>
</body>
</html>
<?php
include "koneksi.php";
@$nama = $_POST['nama'];
@$tgl_lahir = $_POST['tgl_lahir'];
@$alamat = $_POST['alamat'];
@$alamat_array = explode('|', $alamat);
@$kirim = $_POST['submit'];

// Hitung umur berdasarkan tanggal lahir (asumsi format tanggal lahir YYYY-MM-DD)
$umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

$query = "INSERT INTO tbl_data (nama, tgl_lahir, alamat, umur) VALUES ('$nama', '$tgl_lahir', '$alamat', '$umur')";

if ($kirim) {
    $hasil = mysqli_query($koneksi, $query);
    header('location:tampil.php');
}
?>
