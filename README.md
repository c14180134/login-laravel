Tips Penggunaan Project
.Pada project ini menggunakan css Bulma dan Laravel v9
setelah XAMPP berjalan.

.Untuk menjalan kan project ini pada visual code setelah diarahkan ke folder yang berisi aplikasi laravel ini
jalankan perintah di terminal npm run dev yang digunakan untuk mengaktifkan css bulma yang saya download melalui npm install.
tanpa menutup terminal npm buka terminal baru untuk menjalan php artisan serve yang digunakan untuk mengaktifkan website yang ada.

.Setelah berjalan maka akan diarahkan ke halaman login
pada halaman login terdapat sign up , dan forgot password

-untuk register/sign up nantinya akan diarahkan ke halaman register yang akan membuat baru user yang dapat digunakan untuk login.Setelah berhasil
mendaftar user akan diarahkan ke halaman /user yang menampilkan tabel dan terdapat navbar diatas yang berisikan logout dan change password.

-untuk fitur forgot password nantinya akan diarahkan ke form send link to emailreset password yang dimana harus mengetikkan email 
user yang telah terdaftar untuk diganti passwordnya. Untuk uji coba fitur ini dapat menggunakan mailtrap.io yang merupakan testing email.
setelah membuat akun -> masukl ke fitur email testing -> pilih my project setelah itu ke inbox -> pada bagian myinbox terdapat smtp settings
dan ganti dropdown integration ke PHP LARAVEL7+. setelah itu copy data yang berada dibawah dropdown tersebut dan paste ke .env pada project.
Setelah itu pengiriman email dapat dilihat testingnya melalui mailtrap.io

. Setelah melakukan login akan diarahkan ke halaman /user. yang menampilkan tabel dan navbar. halaman /user ini tidak dapat diakses apabila belum
ada user yang login. dan untuk halaman login register dan forgot tidak dapat dimasuki oleh user yang telah login.

untuk fitur change password nantinya user akan diarahkan ke form changepassword yang akan digunakan untuk mengganti password lama dengan password baru
password lama perlu ditulis ulang agar dapat menggantinya dengan password baru.

untuk fitur log out akan menglog keluar user yang saat itu sedang login.

untuk halaman home terdapat fungsi CRUD siswa / user biasa dan uplod foto.

Jangan lupa untuk melakukan migrate untuk mendapatkan table User untuk login dan user untuk table yang berada pada halaman/user.


