# Tugas Kuliah — Faiz Ahmad Risqullah

<div align="center">

### 🌄 Repositori Tugas Mata Kuliah

**Program Studi Informatika**
Fakultas Teknik — Universitas Majalengka

</div>

---

## 👤 Identitas Mahasiswa

| Atribut            | Keterangan                        |
| ------------------ | --------------------------------- |
| **Nama**           | Faiz Ahmad Risqullah              |
| **NPM**            | 2514101077                        |
| **Program Studi**  | Informatika                       |
| **Fakultas**       | Teknik                            |
| **Universitas**    | Universitas Majalengka            |

---

## 📂 Struktur Repositori

```
2514101077/
├── README.md
└── tugas pertemuan 3/            # Promosi Wisata "Bukit Pamoroan" (satu file HTML)
    ├── index.html               # Halaman utama: HTML + CSS internal + JS internal
    └── media/                   # Foto, video, dan backsound
        ├── foto-1.jpg ... foto-7.jpg
        ├── video-1.mp4 ... video-11.mp4
        ├── video-N-poster.jpg    # thumbnail tiap video
        ├── backsound-alam.mp3     # musik ambient (loop seamless, 48 detik)
        └── manifest.json         # daftar nama file & catatan konversi
```

---

## 📋 Daftar Tugas

### 📌 Pertemuan 3 — Promosi Tempat Wisata: **Bukit Pamoroan**

**Identitas Objek Wisata**

| Atribut       | Keterangan                |
| ------------- | ------------------------- |
| Nama          | Bukit Pamoroan            |
| Kategori      | Wisata Alam / Gunung      |
| Lokasi        | Majalengka, Jawa Barat    |

**Ringkasan Tugas**

Membuat *User Interface* berupa halaman promosi tempat wisata **Bukit Pamoroan**
dalam **satu file `index.html`** — CSS dan JavaScript ditulis *internal* di dalam
file yang sama, tidak ada file terpisah. Isi halaman:

1. **Menu aplikasi** — navigasi antar section (Beranda, Tentang, Galeri, Video, Paket Wisata, Kontak)
2. **Foto kegiatan wisata** — 7 galeri foto berorientasi **potret**, bisa diklik untuk melihat ukuran besar (*lightbox*)
3. **Link video** — pemutar video kegiatan wisata di Bukit Pamoroan
4. **Daftar paket wisata** — 4 paket wisata, masing-masing dilengkapi **gambar potret**, **deskripsi**, durasi, kapasitas, dan harga

**Teknologi yang Digunakan**

| Teknologi   | Keterangan                                                            |
| ---------- | --------------------------------------------------------------------- |
| HTML5      | Struktur halaman, *semantic tag*, elemen `<video>`, form                 |
| CSS3       | Layout responsif, *flexbox*/*grid*, orientasi potret, animasi, tema warna |
| JavaScript | Menu mobile, scroll spy, *lightbox*, pemilih video, backsound, validasi form |

**Backsound**

Latar belakang halaman memakai musik ambient `media/backsound-alam.mp3`
(sintesis sendiri: angin, gemuruh air, kicauan burung, dan drone hangat,
durasi 48 detik dengan *loop* seamless).fitur pemutarnya:

| Fitur                  | Penjelasan                                                                     |
| ---------------------- | ------------------------------------------------------------------------------ |
| Tombol play/pause      | Panel backsound di pojok kiri bawah + slider volume                             |
| Redup otomatis         | Volume turun menjadi 12% selama video diputar, kembali normal setelah selesai   |
| Status tersimpan       | Pilihan nyala/mati dan volume disimpan di `localStorage`, jadi tidak perlu klik ulang saat *refresh* |
| Anti-autoplay          | Mematuhi kebijakan browser: musik baru mulai setelah user menekan tombol |

**Catatan Orientasi Foto (Potret)**

Seluruh foto — foto hero, section tentang, galeri, dan foto pada tiap kartu paket —
ditampilkan dengan orientasi **potret** menggunakan `aspect-ratio: 3/4` + `object-fit: cover`,
sehingga semua foto tampak vertikal dan konsisten di setiap bagian halaman.

**Fitur Halaman**

| Fitur                    | Penjelasan                                                                     |
| ------------------------ | ------------------------------------------------------------------------------ |
| Menu aplikasi           | Navigasi ke 6 section plus tombol Pesan Sekarang; berubah menjadi menu geser pada layar kecil |
| Galeri foto              | 7 foto kegiatan berorientasi potret dengan *lightbox* (klik, panah kiri/kanan, tombol `Esc`) |
| Video kegiatan           | 11 video dengan pemilih thumbnail potret, tautan unduh, dan tautan folder Google Drive |
| Paket wisata            | 4 kartu paket (gambar potret, deskripsi, durasi, kapasitas, harga, fasilitas)   |
| Formulir booking        | Validasi isian formulir dan pesan konfirmasi                                     |
| Backsound ambient       | Musik latar (angin, air, kicauan burung) dengan tombol play/pause, slider volume, redup otomatis saat video diputar, dan status tersimpan |
| Tombol kembali ke atas  | Muncul otomatis setelah halaman di-scroll                                       |

**Cara Menjalankan**

Tidak perlu instalasi apa pun. Cukup buka satu file berikut pada browser:

```
tugas pertemuan 3/index.html
```

Folder `media/` berisi foto dan video, sedangkan seluruh kode (HTML, CSS, dan JavaScript)
terdapat di dalam `index.html`.

Atau gunakan live server (opsional):

```bash
# Python
cd "tugas pertemuan 3"
python -m http.server 8000
# lalu buka http://localhost:8000
```

**Sumber Media**

Foto dan video kegiatan wisata Bukit Pamoroan diunduh dari Google Drive dan
disimpan di folder `media/`:

> https://drive.google.com/drive/folders/13Qx3kg8sOEAPA_JXUP_Ra0YuYjFK_Zze

---

## 📚 Daftar Pertemuan

| Pertemuan | Topik                                     | Status |
| --------- | ----------------------------------------- | ------ |
| 3         | Promosi Tempat Wisata (Bukit Pamoroan)    | ✅ Selesai |

---

<div align="center">

**Universitas Majalengka — Fakultas Teknik**
Program Studi Informatika

© 2026 Faiz Ahmad Risqullah · NPM 2514101077

</div>