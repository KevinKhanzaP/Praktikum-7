<!DOCTYPE html>
<html>
  <head>
    <title>Form Input</title> <!-- menulis judul -->
  </head>
  <body>
    <form action="simpan.php" method="post">
    <!-- membuat form yang hasilnya disimpan di file lain -->
      <table> <!-- membuat tabel -->
        <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"</td></tr>
        <!-- membuat kolom pengisian nim -->
        <tr><td>NAMA</td><td><input type="text" name="nama"</td></tr>
        <!-- membuat kolom pengisian nama -->
        <tr><td>JENIS KELAMIN</td><td>
        <!-- membuat radio button pemilihan jenis kelamin -->
              <input type="radio" name="jenis_kelamin" value="L">Laki laki
              <input type="radio" name="jenis_kelamin" value="P">Perempuan
            </td></tr>
        <tr><td>JURUSAN</td><td>
        <!-- membuat pilihan dalam pemilihan jurusan -->
              <select name="jurusan">
                <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                <option value="KEDOKTERAN">KEDOKTERAN</option>
              </select>
            </td></tr>
        <tr><td>ALAMAT</td><td><input type="text" name="nama"</td></tr>
        <!-- membuat kolom pengisian alamat -->
        <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        <!-- membuat button simpan -->
      </table>
    </form>
  </body>
</html>
