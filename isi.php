<h2>List Mahasiswa</h2> <!-- menuliskan text -->
<table border="1"> <!-- membuat tabel dengan ketebalan border=1 -->
  <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th></tr>
  <!-- membuat isi tabel -->
  <?php
    include 'koneksi.php'; //menyertakan file lain
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa"); //mengambil data query db
    $no=1; //deklarasi var
    foreach ($mahasiswa as $row) { //deklarasi kondisi foreach
      $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
      //deklarasi jenis kelamin pada tabel yang akan ditampilkan
      echo "<tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['jurusan']."</td>
            </tr>";
            //menuliskan isi tabel yang diisi dengan data dari db
      $no++; //variabel $no akan bertambah terus hingga kondisi selesai
    }
   ?>
</table>
