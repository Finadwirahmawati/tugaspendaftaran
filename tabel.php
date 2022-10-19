<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
<h1?>Pendaftaran</h1>
<h4> <a href=pendaftaran.php>pendaftaran</a></h4>
<table border="1">
    <tr>
        <th>nama</th>
        <th>tempat_lahir</th>
        <th>tanggal_lahir</th>
        <th>alamat</th>
        <th>jenis_Kelamin</th>
        <th>agama</th>
        <th>Aksi</th>
    </tr>


    <?php
    include ("koneksi.php");
        $sql="SELECT * FROM tb_daftar";
        $query= mysqli_query($db,$sql);

        while($tb_daftar=mysqli_fetch_array($query)){
        echo"<tr>";
            echo"<td>".$tb_daftar['nama']."</td>";
            echo"<td>".$tb_daftar['tempat']."</td>";
            echo"<td>".$tb_daftar['tanggal']."</td>";
            echo"<td>".$tb_daftar['alamat']."</td>";
            echo"<td>".$tb_daftar['jk']."</td>";
            echo"<td>".$tb_daftar['agama']."</td>";
            echo"<td>";
            echo"<a href='edit-data.php?id=".$tb_daftar['id']."'>Edit</a>|";     
            echo"<a href='hapus.php?id=".$tb_daftar['id']."'>Hapus</a>";
            echo"</td>";
        echo"</tr>"; 
    
    }
    ?>
    </table>
    </body>
    </html>
    <!--Citra Dwi Rusniawati>