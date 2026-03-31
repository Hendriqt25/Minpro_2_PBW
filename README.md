# Mini Project 2 PBW

## Deskripsi Web

Project Website ini dirancang untuk sebagai portofolio pribadi yang bertujuan untuk menampilkan informasi mengenai identitas diri, pengalaman organisasi, keahlian, serta sertifikat yang telah didapat.

##  Tampilan Website Portofolio 

### Tampilan Utama ( Hero Section )

<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/22c27eab-05fa-42bd-b4d9-f6efd2ac177a" />

Pada halaman utama, website portofolio ini menampilkan nama lengkap, foto profil, role, deskripsi singkat dan tombol untuk menuju ke linkdln.

<img width="1891" height="88" alt="image" src="https://github.com/user-attachments/assets/a8b97590-3475-4790-b856-eaad9f3b5a19" />

Kemudian bisa diliat pada navbar diatas memliki 4 menu navigasi nya yaitu home, about me, certificates dan profil yang memiliki tujuan masing masing ketika diklik.

### Tampilan About Me ( About Me Section )

<img width="1919" height="1062" alt="image" src="https://github.com/user-attachments/assets/acd87919-21a3-4e8f-87f9-6117d3ee5582" />

Pada tampilan About Me, menampilkan deskripsi diri, daftar skill dengan progress bar dan daftar pengalaman yang sudah dijalani

### Tampilan Certificates ( Certificates Section )

<img width="1919" height="583" alt="image" src="https://github.com/user-attachments/assets/a9d33560-2da0-4667-aef5-48a17c38a3a9" />

Pada tampilan Certificates, menampilkan daftar sertifikat yang sudah diakui dan sudah diselesaikan dalam bentuk card. Dalam masing-masing cartnya memuat foto gambar, judul, instansi dan tahun pelaksanaannya.


## Penjelasan Code untuk setiap section/fitur

### Koneksi database

<img width="947" height="263" alt="image" src="https://github.com/user-attachments/assets/6708cfde-80f5-4083-9e65-94f9921bf97d" />

require_once 'koneksi.php' menghubungkan ke database, $pdo->query() mengambil data, fetch() untuk satu data, fetchAll() untuk banyak data, lalu hasilnya ditampilkan di HTML dengan PHP.

### Head

<img width="1165" height="280" alt="image" src="https://github.com/user-attachments/assets/f956022d-634e-469c-bd8a-bc0706fe4fb3" />

Pada head ini berfungsi utnuk struktur awal html dan sebagai mengatur identitas halaman, menghubungkan bootstrap, dan menghubungkan file CSS eksternal untuk mengatur tampilan website contoh pada gambar diatas indentitas/title webside bernama portofolio - Hendriii dan bagain mengimput library CSS dan bootstrap.

### Body

<img width="416" height="99" alt="image" src="https://github.com/user-attachments/assets/55a42494-e047-4bac-8863-2800a2e854dd" />

Pada body ini merupakan bagian utama dokumen html. Dilihat pada digambar atas menggunakan "id=app" berfungsi pada vue.js dalam mengatur data seperti nama, skill, pengalaman, dan sertifikat.

### Navbar

<img width="961" height="713" alt="image" src="https://github.com/user-attachments/assets/26de14a8-647f-4bae-bbf3-e75377d183cb" />

pada navbar ini merupakan navbar responsif dengan brand/judul "Portofolio" serta 4 menu navigasi yaitu Home, About, Certificates, dan Profil yang memiliki tujuan masing masing jika diklik. 

### Hero

<img width="850" height="648" alt="image" src="https://github.com/user-attachments/assets/57d182cd-74b1-41be-9f72-39f55be107dd" />

pada hero ini menggunakan bootstrip dengan layout dua kolom dimana sisi kiri menampilkan indetitas diri yaitu nama, role, dll sedangkan sisi kanan menampilkan foto profil

### About Me

<img width="1071" height="878" alt="image" src="https://github.com/user-attachments/assets/a02f9b97-feac-4550-8bdd-079c4dbc4cd1" />

Pada About Me ini berfungsi menampilkan profil lengkap, pengalaman, dan skill dengan progress bar. 

<img width="904" height="407" alt="image" src="https://github.com/user-attachments/assets/564c2c9c-bdfc-47ac-b8b7-10c52b68da7c" />

foreach digunakan untuk mengulang setiap data skill dari database, di mana skill['name'] menampilkan nama skill, skill['level'] menentukan persentase kemampuan, sehingga progress bar otomatis menyesuaikan data yang tersimpan di database.

<img width="870" height="189" alt="image" src="https://github.com/user-attachments/assets/9521812f-53f1-45c2-90b2-98d685488efc" />

Menampilkan pengalaman dalam bentuk list dari setiap data berasal dari tabel experiences.

### Certificates 

<img width="1155" height="412" alt="image" src="https://github.com/user-attachments/assets/b0e424ff-f62a-474c-aa50-e140212660fd" />

Pada Certificates ini berfungsi menampilkan daftar sertifikat dalam bentuk card.

### Footer

<img width="473" height="100" alt="image" src="https://github.com/user-attachments/assets/99b7f0b3-094a-4f41-ad55-ab792679586c" />

Pada footer ini berfungsi menampilkan informasi hak cipta(copyright) tahun 2026 sebagi penutup dari website.


