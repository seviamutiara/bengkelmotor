<html>

<head>
    <title>Menampilkan Data Gambar</title>
</head>

<body>
    <table border="1"></table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM calon_mhs");
        while ($data = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?php echo $data['nis']; ?>
                </td>
                <td>
                    <?php echo $data['nama']; ?>
                </td>
                <td>
                    <?php echo $data['jk']; ?>
                </td>
                <td>
                    <?php echo $data['telepon']; ?>
                </td>
                <td>
                    <?php echo $data['alamat']; ?>
                </td>
                <td>
                    <?php echo "<img src='image/" . $data['foto'] . "' width='100'>"; ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    <tr>
        <td><a href="laporan.php">Cetak Data</a></td>
    </tr>
    </table>
</body>

</html>