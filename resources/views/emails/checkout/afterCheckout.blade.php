@component('mail::message')
# Pendaftaran Course {{$checkout->Course->Title}}

Halo, {{$checkout->User->name}}
<br>
Selamat bergabung di Course {{$checkout->Course->Title}}!
<br>
Terima kasih sudah memilih platform Kawan Data sebagai tempat belajar kamu yaa! :D

@component('mail::button', ['url' => route('dashboard')])
Lihat Daftar Kelas
@endcomponent

Salam hangat,<br>
<br>
Eric Julianto<br>
Project Manager<br>
Kawan Data Indonesia<br>
@endcomponent

