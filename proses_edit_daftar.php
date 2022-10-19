<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
    $kode = $_POST['id'];
    $nama=$_POST['nama'];
    $tempat=$_POST['tempat'];
    $tanggal=$_POST['tanggal'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $agama=$_POST['agama'];

$sql="UPDATE tb_daftar SET nama='$nama', tempat='$tempat', tanggal='$tanggal', alamat='$alamat', jk='$jk', agama='$agama' WHERE id=$kode";
$query=mysqli_query($db,$sql);

if( $query ) {
    header('Location:tabel.php');
}else{
    die("gagal mengedit");
}
} else{
    die("akses dilarang");
}
?>