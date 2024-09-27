    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pendaftaran Siswa Bermasalah</title>
        <link rel="stylesheet" href="styleindex.css">
    </head>
    <body>
        <h1>Pendaftaran Siswa Bermasalah</h1>
        <form action="process.php" method="POST">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" required>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>

            <label for="alasan">Alasan Bermasalah:</label>
            <textarea id="alasan" name="alasan" required></textarea>

            <label for="walikelas">Wali Kelas:</label>
            <input type="text" id="walikelas" name="walikelas" required>

            <input type="submit" value="Daftar">
            <a href="daftar.php"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">LIHAT DAFTAR</button></a>
        </form>
    </body>
    </html>

    <?php include "footer.php";?>