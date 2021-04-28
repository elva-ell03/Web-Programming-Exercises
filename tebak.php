<?php
//angka bilangan acak yang dipilih
$acak =rand(1,5);

//jika bilangan sudah disubmit dan ditebak
if(!isset($_COOKIE['submit'])){
	$angka=$_POST['angka'];
			if($angka > $acak) {echo "Hallo, nama saya Mr.PHP. Saya telah memilih secara random sebuah bilangan bulat. Silahkan Anda menebak ya!
			waah... masih salah ya, bilangan tebakan Anda terlalu TINGGI.";
		?>
			<form action="tebak.php" method="post">
			Bilangan tebakan Anda (<input type="nominal" name="angka" />)
			<input type="Submit" />
		<?php
			}
elseif(!isset($_COOKIE['submit'])){
			$angka=$_POST['angka'];
			if($angka < $acak) {echo "Hallo, nama saya Mr.PHP. Saya telah memilih secara random sebuah bilangan bulat. Silahkan Anda menebak ya!
			waah... masih salah ya, bilangan tebakan Anda terlalu RENDAH.";
		?>
			<form action="tebak.php" method="post">
			Bilangan tebakan Anda (<input type="nominal" name="angka" />)
			<input type="Submit" />
		<?php
			}
else{echo " SELAMAT YA... Saya telah memilih bilangan ". $acak;
			echo "<p>Ulangi permainan <a href='formlogin.html'>Ulang Permainan</a></p>";}
}
}
?>