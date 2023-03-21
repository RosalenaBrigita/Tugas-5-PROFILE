<?php
echo '<h1> HASIL INPUT </h1>';

if (isset($_POST['submit'])) {
    echo '<table>';
    echo '<tr><td>'.'Nama Lengkap : '.'</td><td>'.$_POST['nama'].'</td></tr>';
    echo '<tr><td>'.'Username : '.'</td><td>'.$_POST['username'].'</td></tr>';
    echo '<tr><td>'.'Email : '.'</td><td>'.$_POST['email'].'</td></tr>';
    if (isset($_POST['tanggal_lahir'])) {
		$tgl = $_POST['tanggal_lahir'];
		$tanggal = new DateTime($tgl);
		$today = new DateTime('today');
		$tahun = $today->diff($tanggal)->y;
		$bulan = $today->diff($tanggal)->m;
		$hari = $today->diff($tanggal)->d;
        echo '<tr><td>'.'Umur : '.'</td><td>'.$tahun.' tahun '.$bulan.' bulan '.$hari.' hari '.'</td></tr>';
	}
    $jenis_kelamin = ($_POST['jenis_kelamin']);
    $message = nl2br ($_POST['message']);
    echo '<tr><td>'.'Jenis Kelamin : '.'</td><td>' .$jenis_kelamin. '</td></tr>';
    echo '<tr><td>'.'Pesan : '.'</td><td>'.$message.'</td></tr>';
    echo '</table>';
}

?>
