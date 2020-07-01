<?php
/**
 * Cara Membuat koneksi ke database dengan menggunakan extension PHP Data Objects disingkat dengan PDO
 * PDO merupakan extension yang ringan dan konsisten untuk mengakses database
 *
 * Kenapa Menggunakan PDO ?
 * PDO memiliki beberapa keunggulan diantaranya:
 *
 * 1. PDO dapat bekerja pada 12 sistem basis data yang berbeda
 *    Jadi, jika Anda harus mengganti proyek Anda untuk menggunakan database lain, PDO mempermudah prosesnya,
 *    Anda hanya perlu mengubah string koneksi dan beberapa pertanyaan.
 *
 * 2. Mendukung Prepared Statements
 *    Prepared Statements melindungi dari SQL injection, dan ini sangat penting untuk keamanan aplikasi web.
 */
try { // Disini kita menggunakan try { ... } catch(){ ... } adalah untuk penanganan error atau bahasa kerennya Exceptions Handling

    /** @var string $dsn Data Source Name atau DSN, berisi informasi yang diperlukan untuk terhubung ke database. */
    $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=simple-web';

    /** @var string $username username yang memiliki akses untuk mengakses database kita */
    $username = 'root';

    /** @var string $passwd password dari username di atas */
    $passwd = '2sr0ry';

    /** @var PDO $db_koneksi kita akan membuat koneksi ke database menggunakan PDO (Lihat 2 baris kode dibawah) */
    $db_koneksi = new PDO($dsn, $username, $passwd);
    $db_koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // kalau pembuatan koneksi diatas berhasil nanti bakal keluar tulisan di bawah ini
    // echo 'Koneksi database berhasil';

} catch (PDOException $exception) {
    // kalau pembuatan koneksi diatas belum berhasil, nanti bakal keluar tulisan di bawah ini
    echo 'Koneksi database gagal ' . $exception->getMessage();

}
