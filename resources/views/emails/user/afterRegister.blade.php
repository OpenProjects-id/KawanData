@component('mail::message')
# Selamat Bergabung di Kawan Data!

Halo, {{$user->name}}
<br>
Selamat bergabung di Kawan Data, akun kamu sudah berhasil dibuat.
<br>
Sekarang kamu bisa memilih kelas data gratis yang tersedia!

@component('mail::button', ['url' => route('login')])
Masuk Sekarang
@endcomponent

Terima kasih,<br>
<br>
Eric Julianto<br>
Project Manager<br>
Kawan Data Indonesia<br>
@endcomponent
