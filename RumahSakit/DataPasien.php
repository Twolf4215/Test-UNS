<?php 
	include 'koneksi.php';

	$sql = 'SELECT nama_lengkap, no_identitas, jenis_kelamin, tgl_lahir, keluhan 
			FROM registrasi_pasien';
			
	$query = mysqli_query($conn, $sql);

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}

	echo '<table border = 1>
			<th>
				<tr>
					<th>Nama</th>
					<th>No Identitas</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Keluhan Pasien</th>
				</tr>
			</th>
			<tb>';
			
	while ($row = mysqli_fetch_array($query))
	{
		echo '<tr>
				<td>'.$row['nama_lengkap'].'</td>
				<td>'.$row['no_identitas'].'</td>
				<td>'.$row['jenis_kelamin'].'</td>
				<td>'.$row['tgl_lahir'].'</td>
				<td>'.$row['keluhan'].'</td>
			</tr>';
	}
	echo '
		</tb>
	</table>';

	mysqli_free_result($query);
	mysqli_close($conn);
?>