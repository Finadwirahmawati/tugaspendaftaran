<html>
    <head>
    </head>
    <body>
        <h1>Form pendaftaran</h1>
        <form action="proses-pendaftaran.php" method="POST">

            <fieldset>

                <p>
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="tempat">Tempat Lahir  :</label>
                    <input type="text" name="tempat" />
                </p>
                <p>
                    <label for="tanggal">Tanggal Lahir :</label>
                    <input type="date" name="tanggal" />
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" rows="5"></textarea>
                </p>
                <p>
                    <label for="jk">Jenis Kelamin :</label>
                    <label><input type="radio" name="jk" value="Laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">agama :</label>
                    <select>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    </select>
                <p>
                    <input type="submit" value="Submit" name="Daftar" />
                </p>
                </fieldset>
</form>
    </body>
</html>
<!--Citra Dwi Rusniawati>