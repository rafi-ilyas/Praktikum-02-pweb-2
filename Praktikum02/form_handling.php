<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa STTTNF</h1>
    <form action="belajar_post.php" method="POST">
        <!-- type text -->
        <label for="">Nama Mahasiswa</label>
         <input type="text" name="nama"><br><br>

        <!-- type radio -->
        <label for="">Jenis Kelamin</label>
         <input type="radio" name="jenis_kelamin" value="Laki-Laki">
        <label for="">Laki-Laki</label>
         <input type="radio" name="jenis_kelamin" value="Perempuan">
        <label for="">Perempuan</label><br><br>

        <!-- type checkbox -->
        <label for="">Mata Kuliah</label><br>
         <input type="checkbox" name="mata_kuliah" value="Basis Data">
        <label for="">Basis Data</label><br>
         <input type="checkbox" name="mata_kuliah" value="Bahasa Inggris">
        <label for="">Bahasa Inggris</label><br><br>

        <!-- type number -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="nomor_telepon"><br><br>

        <!-- select -->
        <label for="">Prodi</label>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>


        <!-- button -->
        <button type="submit">Kirim</button>
        <button type="button">Contoh</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>