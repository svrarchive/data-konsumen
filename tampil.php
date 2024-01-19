
<html>
<head>
    <title>Data Konsumen</title>
</head>
<body>
    <h2 align="center">Data Konsumen<h2>
    <?php
    include "koneksi.php";
    $query = "SELECT * FROM tbl_data";
    $hasil = mysqli_query($koneksi, $query);

    while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <table>
            <tr>
                <td>-------------------------------</td>
            </tr>
            <tr>
                <td>Konsumen: <?php echo $data['nama']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir: <?php echo $data['tgl_lahir']; ?></td>
            </tr>
            <tr>
                <td>Umur: <?php echo $data['umur']; ?> Tahun</td>
            </tr>
            <tr>
                <td>Alamat:</td>
            </tr>
            <?php
            $alamat_array = explode('|', $data['alamat']);
            foreach ($alamat_array as $index => $alamat) {
                ?>
                <tr>
                    <td><?php echo $index + 1; ?>. <?php echo $alamat; ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td>-------------------------------</td>
            </tr>
        </table>
    <?php
    }
    ?>
</body>
</html>