<?php

//Cek sudah pernah input nama dan email atau belum
if(!isset($_COOKIE['namauser'])) {
  header("Location: formentri.html");
}
//Jika sudah pernah input nama dan email
elseif (isset($_COOKIE['namauser'])) {
  $nama = $_COOKIE['namauser'];
  echo "<p>Hallo ".$nama.", selamat datang kembali di permainan ini!</p>";
  echo "
  <form action='game.php'>
      <input type='submit' value='Start Game'/>
  </form>
  <p>Bukan anda? <a href='formentri.html'>(klik disini)</a></p>
  ";
}

?>