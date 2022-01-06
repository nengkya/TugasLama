<?php
  //1. Fungsi time merupakan sebuah fucntion dalam php yang di pergunakan untuk mengambil waktu sekarang pada mysqlnd_ms_dump_server
  //dalam format timestamp. Fungsi ini tidak mempunyai InvalidArgumentException

  echo "<ol>Tanggal: ".date("Y-m-d H:i:s </ol>"); //akan menampilakn tanggal dan waktu terkini
  echo "<ol> Timestamp: ".time("</ol>");

  date_default_timezone_set("UTC"); //menggunakan default time zone
  echo "<ol>Tanggal: ".date("Y-m-d H:i:s </ol>");
  echo "<ol>Timestamp: ".time("</ol>");

  echo ' Waktu sekarang: ' . date('Y-m-d H:i:s') . '<br/>';
  echo '1 menit kedepan: ' . date('Y-m-d H:i:s', time() + 60) . '<br/>';
  echo '1 jam kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60)) . '<br/>';
  echo '1 hari kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60 * 24)) . '<br/>';
  echo '7 hari kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60 * 24 * 7)) .'<br/>';
  //salah satu function time
  function Menentukandetik ($detik){
    $detik = 60;
      return $detik;
  }
  echo '1 menit kedepan adalah: '.Menentukandetik(1). " Detik" .date(' Y-m-d H:i:s', time() + 60);
  echo "<br>";
  echo "=================================================================";
  echo "<br><br><br>";

  //2. Var_dump()
  //Karena sifat variabel dalam PHP yang tidak bertipe (Loosely Typed Language),
  //dalam pembuatan program PHP sebuah tipe variabel dapat “berubah” menjadi tipe lainnya.
  //Seperti yang kita lihat pada saat pembahasan tentang tipe data boolean, tipe data string “aku”, dapat menjadi tipe data boolean TRUE.
  $a=5; $b=9; $c=3;
  $hasil1= $a+$b;
  $hasil2=  $a+$c;
  $hasil3= $c.$a;

  echo "$hasil1: "; var_dump($hasil1);
  echo "<br>";
  echo "$hasil2: "; var_dump($hasil2);
  echo "<br>";
  echo "$hasil3: "; var_dump($hasil3);

  echo "<br>";
  function kelilingpersegi($sisi){
   $kelilingsegi=$sisi*$sisi;
     return $kelilingsegi;
  }
  echo "<br>";
  echo"Jadi Keliling Persegi adalah ".var_dump(10).kelilingpersegi(10);

  //di proses output akan terlihat tipe data dari hasil pengolahan variabel tersebut.
  echo "<br>";
  echo "=================================================================";
  echo "<br><br><br>";

  //3. Fungsi count
  // Fungsi count pada PHP bisanya digunakan untuk
  //mengetahui jumlah data yang terdapat pada array.

  $kota = ["Madrid ","Paris ","Brussel ","Amsterdam ","Beograd "];
  echo "<br>";
  echo "kota [Madrid,Paris,Brussel,Amsterdam,Beograd]";
  echo "<br>";
  $totalIbuKota= count ($kota);
  echo "Jadi Jumlah array Ibu kota Adalah: ".$totalIbuKota;

  echo "<br>";
  echo $kota[0];
  echo $kota[1];
  echo $kota[2];
  echo $kota[3];
  echo $kota[4];

  echo "<br>";
  echo "=================================================================";
  echo "<br>";
  $kota3=["tanggerang "," jakarta"," bandung"];
  for ($i=0; $i <count($kota3) ; $i++)
	{
	echo "dengan perulangan: ".$kota3[$i];
  }

  echo "<br>";
  echo "=================================================================";
  echo "<br><br><br>";

  //4. fungsi empty()
  //Fungsi empty() merupakan fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong.
  //Fungsi ini sangat bermanfaat untuk mengecek dan mencegah inputan kosong.
  $nama=""; //data kosong atau tidak kosong
  if (empty($nama)) {
    echo "Silakan Isi Nama";
  }
  else {
    echo "Nama Sudah Terisi";
  }

  echo "<br>";
  $nama1="nana";//data kosong atau tidak kosong
  $nama1=trim($nama1);
  if (empty($nama1)) {
    echo "Silakan Isi Nama";
  }
  else {
    echo "Nama Sudah Terisi";
  }
  echo "<br>";
  echo "=================================================================";
  echo "<br><br><br>";

  //5. strpos()
  //adalah fungsi bawaan PHP yang bisa digunakan untuk mencari posisi sebuah karakter atau sebuah string di dalam string lainnya. Hasil akhir fungsi ini adalah angka yang
  //menunjukkan posisi karakter/string yang ingin dicari.

  $kata="sedang sedia sedang";
  $posisi=strpos($kata,"e");
  echo $posisi;
  // 1
  echo "<br>";

  $kalimat="Sedang serius belajar PHP";
  $cari="serius";
  $posisi=strpos($kalimat,$cari);
  echo $posisi;
  echo "<br>";

  $kalimat="sedang serius belajar php";
  $posisi= strpos ($kalimat, "CSS");
  if ($posisi) {
    echo "ketemu";
  }
  else {
    echo "Tidak Ketemu";
    //hasilnya pasti tidak ketemu karena tidak ada kata css
  }
  echo "<br><br>";
  $kalimat="sedang serius belajar php";
  $search="belajar";
  $posisi= strpos ($kalimat, $search);
  if ($posisi) {
    echo "ketemu";
    //hasilnya pasti ketemu karena strpost memulai dari kalimat kedua
    //jika dimasukkan bagian kalimat pertama, maka akan tidak ditemukan stringnya.
  }
  else {
    echo "Tidak Ketemu";
  }
  echo "<br><br>";

  $kalimat="sedang serius belajar php";
  $posisi= strpos ($kalimat, "sedang");
  if ($posisi !==FALSE) {
    echo "ketemu";
    //hasilnya pasti ketemu karena strpost memulai dari kalimat kedua
    //jika dimasukkan bagian kalimat pertama, maka akan tidak ditemukan stringnya.
    //jika ditambahkan false maka akan terjadi sebaliknya
  }
  else {
    echo "Tidak Ketemu";
  }
  echo "<br><br>";
  echo "==========================================";
  echo "<br><br>";

  //6. isset()
  //isset merupakan procedure dimana setelah menampilkan nilai dari form
  //hal yang harus kita lakukan berikutnya adalah melakukan proses validasi
  if (isset($_GET["nama"]) AND isset($_GET["email"]))
  {
  echo $_GET["nama"];
  echo $_GET["email"];
  }
  else {
    echo "maaf informasi yang anda berikan kurang lengkap dari form.html";
  }
  // pada kode diatas $_GET["nama"] dan $_GET["email"] harus tersedia
  //baru nilai dapat ditampilkan, namun jika tidak ada, akan ditampilkan
  //pesan bahwa halaman yang anda berikan kurang lengkap dari form.html tersebut.
  echo "<br><br>";
  echo "==========================================";
  echo "<br><br>";

  //7. substr()
  //fungsi ini dibuat dalam php untuk pengambilan sebagian nilai string
 //sangat praktis untuk mengmbil sebagian atau bahkan memotong sebuah string
 $kalimat="belajar php di lab lci";
 $sub_kalimat=substr($kalimat,8,6);
 echo $sub_kalimat;
 echo "<br><br>";
 echo "==========================================";
 echo "<br><br>";

  //8. strcmp()
  //merupakan salah satu fungsi yang terdapat dalam php dimana cara kerjanya adalah untuk
  //untuk membandingkan dua buah string dan akan menghasilkan bilangan bulat (int)
  $password1="qwert"; //bisa kosong atau berisi
		$password2="qwert"; //bisa kosong atau berisi tergantung implementasi
		$cek=strcmp($password1, $password2);
		if ($cek) {
			echo "password yang anda masukan berbeda";
		}
		else{
			echo "password sama";
		}
    echo "<br>";
    echo "=========";
    echo "<br>";

    $password1="qwerty"; //bisa kosong atau berisi
  		$password2="qwert"; //bisa kosong atau berisi tergantung implementasi
  		$cek=strcmp($password1, $password2);
  		if ($cek) {
  			echo "password yang anda masukan berbeda";
  		}
  		else{
  			echo "password sama";
  		}
 ?>
