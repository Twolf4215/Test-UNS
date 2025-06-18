<!DOCTYPE html>
<html>
<head>
<title>Formulir Registrasi Pasien</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Formulir Registrasi Pasien</h2>
    <form action="FormRegistrasi.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="no_identitas">Nomor Identitas:</label><br>
        <input type="text" id="no_identitas" name="no_identitas" placeholder="wajib diisi"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin"><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>
        
        <label for="keluhan">Keluhan Utama:</label><br>
        <input type="text" id="keluhan" name="keluhan"><br><br>
        
      	<input type="submit" value="Daftar">
		<a href="DataPAsien.php"></a>
    </form>
  </div>

</body>
</html>