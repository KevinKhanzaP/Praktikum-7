<!DOCTYPE html>
<html>
  <head>
    <title>Form Tambah Kontak</title> <!-- menulis judul -->
  </head>
  <body>
    <h2>Silahkan isi form dibawah ini :</h2>
    <form action="simpankontak.php" method="post">
    <!-- membuat form yang hasilnya disimpan di file lain -->
      <table border="7"> <!-- membuat tabel -->
        <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
        <!-- membuat kolom pengisian nama -->
        <tr><td>JENIS KELAMIN</td><td>
        <!-- membuat radio button pemilihan jenis kelamin -->
              <input type="radio" name="jkel" value="L">Laki laki
              <input type="radio" name="jkel" value="P">Perempuan
            </td></tr>
        <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
        <!-- membuat kolom pengisian email -->
        <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
        <!-- membuat kolom pengisian alamat -->
        <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
        <!-- membuat kolom pengisian kota -->
        <tr><td>PESAN</td><td><textarea placeholder="Ketikkan pesan Anda..." cols="25"
            rows="4" name="pesan"></textarea></td></tr>
        <!-- membuat kolom pengisian pesan dengan textarea -->
        <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        <!-- membuat button simpan -->
      </table>
    </form>
  </body>
</html>
