# Panduan Kontribusi

## Persiapan

Untuk memulai berkontribusi pada repo ini, anda perlu membuat fork repo ini di akun github anda (lihat [panduan fork repo](https://zea.silvrback.com/cara-berkontribusi-coding-di-github)).

Setelah itu anda dapat mengikuti beberapa tahap berikut ini:

1. Mencari issue yang masih dibuka dan belum di tugaskan (assign) ke orang lain
2. Menghubungi / mention admin atau mantainer untuk mengambil issue tersebut
3. Membuat branch fitur baru di repo upstream (repo ini) jika belum ada. Misalkan branch `halaman-donasi` untuk branch fitur yang berhubungan dengan halaman donasi
4. Di repo local anda, buat branch baru dari branch fitur tersebut, nama branch disesuaikan dengan issue / subfitur yang dikerjakan. Contoh nama: `halaman-donasi/daftar-donatur`
5. Jalankan `git pull upstream halaman-donasi` pada repo fork anda untuk menerapkan perubahan di repo upstream ke repo anda
6. Anda dapat mulai mengerjakan issue / fitur

## Panduan Git Flow yang dipakai

Untuk memudahkan proses kolaborasi antar kontributor pada repo ini, kita perlu menerapkan aturan git yang perlu dijadikan pedoman.

### Tipe-tipe Branch

Pada repo ini kita akan menggunakan beberapa tipe `branch`. diantaranya yaitu:

| Tipe       | Deskripsi                                                                                                                                |
| ---------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `main`     | Branch utama, branch ini perlu dilindungi dan dipastikan tidak ada error                                                 |
| `develop`      | Branch pengembangan, fitur-fitur yang sudah selesai dikembangkan akan di merge ke branch ini                                                                      |
| `release`     | Branch ini digunakan untuk penandaan versi aplikasi yang siap rilis  (cth: `freeducation-v1`)  |
| `feature` | Branch yang dibuat setiap ingin mengerjakan fitur baru (cth: `halaman-donasi`)       |
| `hotfix`     | Branch yang digunakan untuk memperbaiki bug/error/issue yang ada pada kode. Nama branch dapat menggunakan id dari issue yang ingin diselesaikan (cth: `hotfix-83` / `hotfix-cart-kosong`)   |

### Git Flow

> Sebelum baca ini sebaiknya baca terlebih dahulu bagian persiapan

Berikut ini panduan yang dapat digunakan ketika ingin mengerjakan fitur / sub-fitur.

1. Checkout ke branch develop dan sinkronkan local branch dengan update dari upstream
```
git checkout develop
git pull upstream develop
```
2. Buat branch fitur baru dari branch develop di repo upstream jika belum ada. contoh : `halaman-donasi`
3. Checkout ke branch fitur di local, jadikan branch fitur di upstream sebagai upstream di branch fitur lokal
```
// jika branch sudah ada
git checkout halaman-donasi 

// jika branch belum ada
git checkout -b halaman donasi

// konfigurasi upstream untuk branch
git branch --set-upstream-to upstream/halaman-donasi
```
4. Buat branch fitur / task dari branch fitur utama. Contoh: `halaman-donasi/progress-donasi`
```
git checkout -b halaman-donasi/progress-donasi
```
5. Jika sudah selesai mengerjakan, push branch lokal ke repo github (hasil fork) anda
```
git push origin halaman-donasi/progress-donasi
```
6. Buat PR dari branch yang tadi sudah di push di repo github anda ke branch fitur di repo upstream. Jangan lupa tambahkan reviewer. Contoh : `base: Freeducation:halaman-donasi <- <repo-fork>:halaman-donasi/progress-donasi`
7. Menunggu hasil review
8. Jika PR di setujui bisa merge ke branch fitur, gunakan opsi `squash & merge` jika commit anda lebih dari 2.
9.  Jika PR tidak disetujui, perbaiki kode sesuai hasil review di branch lokal anda.
10. Jika sudah selesai, push perubahan ke branch di github
11. Ulangi hingga PR disetujui

## Ketentuan Commit

Pesan commit harus memiliki format sebagai berikut:

```
<tipe>: <deksripsi>
```

### Tipe Commit

Berikut merupakan tipe-tipe pesan commit yang dapat digunakan:

| Tipe       | Deskripsi                                                                                                                                |
| ---------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `feat`     | Implementasi fitur baru (cth: `feat: menambahkan halaman cart`)                                                                          |
| `fix`      | perbaikan bug / error (e.g. `fix: item in card is not showing`)                                                                          |
| `docs`     | Menambah / memperbarui dokumentasi (e.g. `docs: menambahkan file README.md`)                                                             |
| `refactor` | Refactoring kode, mengganti nama variable, menambahkan semikolon, formatting, dsb. (e.g. `refactor: mengubah nama fungsi`)               |
| `test`     | Menambahkan testing pada kode (e.g. `test: menambahkan unit test untuk addItemIntoCart()`)                                               |
| `chore`    | Menambahkan kode yang tidak berhubungan dengan semua tipe diatas. Menata kode, membuat file setup, dsb. (e.g. `chore: initiate project`) |

Setiap commit yang menyebabkan aplikasi versi sebelumnya tidak dapat berjalan dengan semestinya (lihat: [breaking changes](https://nordicapis.com/what-are-breaking-changes-and-how-do-you-avoid-them/)), harus ditambahkan `(breaking change)` pada pesan commitnya. Sebagai contoh: `refactor (breaking): memindahkan modul cart ke folder components`.

Untuk lebih jelasnya dapat dibaca lagi mengenai ketentuan commit ini di [conventional commits](https://www.conventionalcommits.org/en/v1.0.0/)