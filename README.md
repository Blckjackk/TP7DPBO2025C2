# Janji
Saya Ahmad Izzuddin Azzam dengan NIM 2300492 berjanji mengerjakan TP7 DPBO dengan keberkahan-Nya, maka saya tidak akan melakukan kecurangan sesuai yang telah di spesifikasikan, Aamiin

# Aplikasi Manajemen Resep Makanan
Aplikasi ini memungkinkan pengguna untuk mengelola resep makanan, bahan-bahan, dan cara pembuatan resep. Pengguna dapat menambah, mengedit, mencari, dan menghapus resep melalui antarmuka yang sederhana dan mudah digunakan.

## Struktur Direktori
Aplikasi ini dibangun dengan menggunakan struktur direktori berikut:

### `class/`
- **Resep.php**: Menangani operasi terkait resep makanan.
- **Bahan.php**: Menangani operasi bahan-bahan resep.
- **DetailResep.php**: Menangani operasi cara pembuatan resep.

### `config/`
- **db.php**: Mengonfigurasi koneksi ke database menggunakan PDO.

### `database/`
- **db_resepmakanan.sql**: Berisi perintah SQL untuk membuat tabel yang digunakan oleh aplikasi.

### `view/`
- Berisi tampilan antarmuka pengguna (UI), termasuk file untuk header, footer, dan halaman-halaman untuk resep, bahan, dan cara pembuatan resep.

## Alur Program

### Halaman Utama (index.php)
- **index.php** bertindak sebagai controller utama untuk menangani navigasi antar halaman berdasarkan parameter `?page=` di URL.
- File ini mengimpor file-file konfigurasi dan model yang diperlukan (misalnya `db.php`, `Recipe.php`, `Ingredients.php`, `Preparation.php`), lalu menginisialisasi objek untuk pengelolaan resep, bahan, dan detail resep.

### Fungsi CRUD (Create, Read, Update, Delete)
- **Create**: Menambahkan data resep, bahan, atau detail resep melalui form input yang kemudian diproses oleh kelas masing-masing.
- **Read**: Menampilkan daftar resep yang ada. Pengguna dapat mencari resep berdasarkan nama resep.
- **Update**: Memungkinkan pengguna untuk mengedit data resep melalui halaman edit (belum ditampilkan dalam kode ini).
- **Delete**: Menghapus resep yang sudah tidak dibutuhkan dengan konfirmasi terlebih dahulu.

### Navigasi Antar Halaman
- Navigasi antar halaman dilakukan melalui parameter `?page=` pada URL, dengan opsi untuk mengakses halaman resep, bahan, dan detail resep.
- Link navigasi terdapat pada bagian navbar untuk berpindah antar halaman.

### Form Pencarian Resep
- Pengguna dapat mencari resep berdasarkan nama resep yang dimasukkan.
- Tombol "Cari" akan melakukan pencarian resep, sedangkan tombol "Tampilkan Semua" akan mereset pencarian dan menampilkan semua resep.

### Pencarian Data
- Ketika tombol "Cari" ditekan, data resep akan dicari menggunakan metode `search()` pada objek `Recipe`. Jika parameter pencarian ada, maka hanya resep yang sesuai dengan kata kunci yang akan ditampilkan.

### Menampilkan Resep
- Data resep yang ditemukan akan ditampilkan dalam format kartu, mencakup nama resep, deskripsi singkat, waktu masak, dan dua link untuk mengedit atau menghapus resep tersebut.

## Kode PHP dan Interaksi Formulir

### Pengolahan Formulir
- Di bagian awal kode, terdapat pengecekan apakah formulir `add_resep`, `add_bahan`, atau `add_detail` telah disubmit. Jika iya, maka data akan diproses dan dimasukkan ke dalam database menggunakan metode `create()` yang ada di masing-masing kelas.

### Navigasi dan Tampilan
- Navigasi antar halaman dilakukan dengan mengambil nilai parameter `?page=`, yang akan mengarahkan ke file tampilan yang sesuai seperti `resep_form.php`, `bahan_form.php`, atau `detailresep_form.php`.

### Pencarian dan Reset
- Pencarian dilakukan dengan mengambil input dari form dan mencari resep berdasarkan kata kunci. Jika tombol "reset" ditekan, pencarian akan direset, sehingga menampilkan semua resep tanpa filter.

## Penjelasan Tampilan

- Pada bagian tampilan resep, data resep ditampilkan dalam format kartu yang berisi nama resep, deskripsi singkat, waktu masak, dan dua link untuk mengedit atau menghapus resep tersebut.
- Jika tidak ada resep yang ditemukan, pesan "Resep tidak ditemukan" akan ditampilkan.

## Fitur CRUD

### Create
- Menambahkan data baru (reses, bahan, detail resep) melalui form input yang kemudian diproses oleh kelas masing-masing.

### Read
- Menampilkan daftar resep yang ada, termasuk fitur pencarian untuk memfilter resep berdasarkan nama atau kategori.

### Update
- Memungkinkan pengguna untuk mengedit data resep melalui halaman `edit_resep.php`.

### Delete
- Menghapus resep yang sudah tidak dibutuhkan dengan konfirmasi terlebih dahulu untuk menghindari penghapusan yang tidak disengaja.
