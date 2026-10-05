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
└── tugas pertemuan 3/            # Promosi Wisata "Bukit Pamoroan" (HTML)
    ├── index.html               # Halaman utama (User Interface)
    ├── style.css                # Tampilan/layout halaman
    ├── script.js                # Interaksi: menu, lightbox, video, form
    └── media/                   # Foto & video kegiatan wisata
        ├── foto-1.jpg ... foto-7.jpg
        ├── video-1.mp4 ... video-11.mp4
        ├── video-N-poster.jpg    # thumbnail tiap video
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
menggunakan **HTML** (disertai CSS dan JavaScript), yang memuat:

1. **Menu aplikasi** — navigasi antar section (Beranda, Tentang, Galeri, Video, Paket Wisata, Kontak)
2. **Foto kegiatan wisata** — galeri foto yang bisa diklik untuk melihat ukuran besar (*lightbox*)
3. **Link video** — pemutar video kegiatan wisata di Bukit Pamoroan
4. **Daftar paket wisata** — 4 paket wisata, masing-masing dilengkapi **gambar**, **deskripsi**, durasi, kapasitas, dan harga

**Teknologi yang Digunakan**

| Teknologi   | Keterangan                                                   |
| ---------- | ----------------------------------------------------------- |
| HTML5      | Struktur halaman, *semantic tag*, elemen `<video>`, form       |
| CSS3       | Layout responsif, *flexbox*/*grid*, animasi, tema warna         |
| JavaScript | Menu mobile, scroll spy, *lightbox*, pemilih video, validasi form |

**Fitur Halaman**

| Fitur                    | Penjelasan                                                          |
| ------------------------ | ------------------------------------------------------------------- |
| Menu aplikasi           | Navigasi ke 6 section plus tombol Pesan Sekarang; berubah menjadi menu geser pada layar kecil |
| Galeri foto              | 7 foto kegiatan dengan *lightbox* (klik, panah kiri/kanan, tombol `Esc`) |
| Video kegiatan           | 11 video dengan pemilih thumbnail, tautan unduh, dan tautan folder Google Drive |
| Paket wisata            | 4 kartu paket (gambar, deskripsi, durasi, kapasitas, harga, fasilitas) |
| Formulir booking        | Validasi isian formulir dan pesan konfirmasi                              |
| Tombol kembali ke atas  | Muncul otomatis setelah halaman di-scroll                                |

**Cara Menjalankan**

Tidak perlu instalasi apa pun. Cukup buka file berikut pada browser:

```
tugas pertemuan 3/index.html
```

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