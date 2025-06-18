<?php
include 'koneksi.php';


    $nama_lengkap =  $_REQUEST['nama'];
    $no_identitas = $_REQUEST['no_identitas'];
    $jenis_kelamin =  $_REQUEST['jenis_kelamin'];
    $tgl_lahir =  $_REQUEST['tanggal_lahir'];
    $keluhan =  $_REQUEST['keluhan'];

    $sql = "INSERT INTO registrasi_pasien VALUES ('$nama_lengkap', 
        '$no_identitas','$jenis_kelamin','$tgl_lahir','$keluhan')";
        
    if(mysqli_query(mysql: $conn, query: $sql)){
        echo "<h3>data stored in a database successfully." 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>"; 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error(mysql: $conn);
    }
        
        // Close connection
        mysqli_close(mysql: $conn);

?>
</body>
</html>