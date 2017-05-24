<?php
////////////////////////////////////////////////////////////////////////////
//Ini adalah konfigurasi untuk koneksi server data base yang sudah dipilih//
//script config.php ini hanya menjalankan perintntah untuk koneksi ke-    //
//server database yang telah dibuat.                                      //
////////////////////////////////////////////////////////////////////////////
$server="localhost";//Nama Server
$user="root";		//Nama User pemilik database di server
$password="";		//password dari user
$db_nya="scc";		//Data base yang dipilih dari server

////////////////////////////////////////////////////////////////////////////
//Ini adalah perintah untuk menyambung ke server dan data base yang sudah //
//di atur sebelumnya pada konfigurasi server. Usahakan jangan merubah     //
//script-nya.                                                             //
////////////////////////////////////////////////////////////////////////////
$koneksi=mysql_connect($server, $user, $password);
if (! $koneksi)
	die("Tidak dapat terkoneksi ke server!");
print ("");

////////////////////////////////////////////////////////////////////////////
//Perintah untuk menyambung ke "data base" pada server yang sudah diatur  //
//pada konfigurasi sebelumnya.                                            //
////////////////////////////////////////////////////////////////////////////
$db_conf=mysql_select_db($db_nya, $koneksi);
if (! $db_conf)
	die(include "gagal_db.php");
print ("");

////////////////////////////////////////////////////////////////////////////
//Perintah untuk menutup koneksi ke server.                               //
////////////////////////////////////////////////////////////////////////////
//                                                                        //
//mysql_close($koneksi); //harus diletakan di akhir panggilan             //
//                                                                        //
//perintah tersebut diletakan pada halaman yang memanggil data  dari data //
//base SQL. Script tersebut harus diletakan di akhir panggilan database   //
////////////////////////////////////////////////////////////////////////////
?>
