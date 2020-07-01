<?php
/**
 * router.php
 * fungsinya adalah seperti operator
 * disini tempat meletakkan logika kita yang gunanya untuk menangani
 * permintaan (request) dari user kalau disini berupa url yang diakses user, seperti dibawah ini:
 *
 * 1). belajar.localhost:9000/(tidak ada paramater)
 * 2). belajar.localhost:9000/?page=(paramater kosong)
 * 3). belajar.localhost:9000/?page=user
 * 4). belajar.localhost:9000/?page=lihat-user&id=1
 * 5). belajar.localhost:9000/?page=edit-user&id=1
 * 6). belajar.localhost:9000/?page=hapus-user&id=1
 * 7). belajar.localhost:9000/?page=buat-user
 *
 * penjelasan :
 * (belajar.localhost:9000) adalah domain yang kita akses dengan port 9000
 * ( ?page=(kosong), ?page=user, ?page=lihat-user&id=1, ?page=edit-user&id=1,
 * ?page=hapus-user&id=1, ?page=buat-user ) adalah paramater yang ada pada url
 *
 * jadi disini kita harus membuat logika untuk menangani 5 url diatas
 * kita akan coba buat logika untuk menangani url nomer 1,2,3 dulu, gooo!
 *
 */
$router = [
    // format router
    // 'isi paramater page' => 'halaman yang dituju'
    'home' => './tampilan/index.php',
    'user' => './tampilan/user/index.php',
    '404' => './tampilan/404.php',
];

/**
 * kenapa kita menggunakan $_GET ?
 * karena url yang berisi paramater diatas tergolong dalam jenis metode GET,
 * dan alasan kedua adalah metode dasar dari url yang sering kita lihat
 * dibrowser adalah bermetode GET,
 *
 * dibawah ini kita akan mengambil paramater "page" dari url seperti diatas
 */
if (isset($_GET['page'])) { // isset fungsinya untuk memeriksa apakah paramater "page" ada dan tidak kosong
    /**
     * kalau paramater "page" ada dan tidak kosong, maka selanjutnya adalah
     * memeriksa apakah isi atau value dari paramater "page" ada atau terdaftar
     * di variable $router diatas
     *
     * @see $router (tekan CTRL + klik tulisan router disamping kiri bari ini)
     */
    if (in_array($_GET['page'], array_keys($router))) {
        $page = $_GET['page']; // kalau terdaftar maka akan ditampilkan halaman yang dituju
    } else {
        $page = '404'; // kalau tidak terdaftar pada router maka dilempar ke halaman 404
    }
} else {
    $page = 'home';// kalau tidak ada paramater maka akan ditampilkan halaman utama atau homepage
}

/**
 * memanggil halaman yang dimaksud,
 * misalnya: $router['home'] atau $router['user'] atau $router['404']
 * supaya lebih fleksibel kita buat sperti ini $router[$page]
 * halaman yang tampil adalah sesuai dengan isi pada variable $page
 */
require $router[$page];

