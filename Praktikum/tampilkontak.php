<?php
session_start (); //memulai sessionnnya
 ?>

 <h2>List Kontak</h2> <!-- menuliskan text -->
<table border="1"> <!-- membuat tabel dengan ketebalan border=1 -->
  <tr>   <!-- membuat isi tabel -->
    <th>NO</th>
    <th>NAMA</th>
    <th>GENDER</th>
    <th>EMAIL</th>
    <th>ALAMAT</th>
    <th>KOTA</th>
    <th>PESAN</th>
  </tr>
  <?php
    include 'koneksi.php'; //menyertakan file lain
    $kontak = mysqli_query($koneksi, "SELECT * from kontak"); //mengambil data query db
    $no=1; //deklarasi var
    foreach ($kontak as $row) { //deklarasi kondisi foreach
      $jkel = $row['jkel']=='P'?'Perempuan':'Laki laki';
      //deklarasi jenis kelamin pada tabel yang akan ditampilkan
      echo "<tr>
            <td>$no</td>
            <td>".$row['nama']."</td>
            <td>".$jkel."</td>
            <td>".$row['email']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['kota']."</td>
            <td>".$row['pesan']."</td>
            </tr>";
            //menuliskan isi tabel yang diisi dengan data dari db
      $no++; //variabel $no akan bertambah terus hingga kondisi selesai
    }
   ?>
</table>
