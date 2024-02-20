<?php
//menghubungkan ke database
$koneksi = mysqli_connect("localhost","root","","galeryfoto2");

//mengambil data dari data base
$hasil = mysqli_query($koneksi,"SELECT * FROM galeryalbum");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Website Galeri Foto </h1>
    <a href="">TAMBAH DATA</a>
    <table border=1>
        <thead>
            <tr>
            <th>no</th>
            <th>foto kegiatan</th>
            <th>judul kegiatan</th>
            <th>tanggal</th>
            <th>action</th>
</tr>

        </thead>
        <body>
            <?php
             $i=1;
             while($row = mysqli_fetch_assoc($hasil)):?>
            <tr>
            <td><?= $i ?></td>
            <td><?= $row["foto"] ?></td>
            <td><?= $row["keterangan"] ?></td>
            <td><?= $row["tanggal"]?></td>
            <td>
                <a href="">edit </a> | <a href="">hapus</a>
            </td>
</tr>
<?php 
$i++;
endwhile;
 ?>
        </body>
</table>
    
</body>
</html>