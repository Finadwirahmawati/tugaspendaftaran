<?php
include('koneksi.php');
if(!isset($_GET['id'])){
    header('Location:tabel.php');
}
$kode=$_GET['id'];
$sql ="SELECT * FROM tb_daftar WHERE id=$kode";
$query = mysqli_query($db,$sql);
$tb_daftar = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("Data tidak ditemukan");
}

?>
<html>
    <head>
    </head>
    <body>
        <h1>From tabel</h1>
        <form action="proses_edit_daftar.php"method="POST">
            <fieldset>
                <input type="hidden"  name="id" value="<?php echo $tb_daftar['id']?>"/>
                <p>
                    <label for="nama">Nama Lengkap  : </label>
                    <input type="text" name="nama" value="<?php echo $tb_daftar['nama']?>"/>
                <p>
                    <label for="tempat">Tempat lahir : </label>
                    <input type="text" name="tempat" value="<?php echo $tb_daftar['tempat']?>"/>
                <p>
                    <label for="tanggal">Tanggal lahir : </label>
                    <input type="date" name="tanggal" value="<?php echo $tb_daftar['tanggal']?>"/>
                <p>
                    <label for="alamat">Alamat : </label>
                    <textarea name="alamat" rows="3" value="<?php echo $tb_daftar['alamat']?>"></textarea>
                <p>
                    <label for="jk">Jenis kelamin : </label>
                    <label><input type="radio" name="jk" value="laki-laki" <?php echo ('laki-laki') ?"checked": "" ?>/>Laki-Laki</label>
                    <label><input type="radio" name="jk" value="perempuan" <?php echo ('perempuan') ?"checked": "" ?>/>Perempuan</label>
                <p>
                <label for="agama">agama :</label>
                    <select name="agama">
                    <option <?php echo ('islam')? "selected" : "" ?>>Islam</option>
                    <option <?php echo ('kristen')? "selected" : "" ?>>Kristen</option>
                    <option <?php echo ('katolik')? "selected" : "" ?>>Katholik</option>
                    <option <?php echo ('hindu')? "selected" : "" ?>>Hindu</option>
                    <option <?php echo ('budha')? "selected" : "" ?>>Buddha</option>
                    </select>
                    </p>
                <p>
                    <input type="submit"value="simpan"name="simpan"/>
                </p>
                </fieldset>
        </form>
    <body>
 </html>
