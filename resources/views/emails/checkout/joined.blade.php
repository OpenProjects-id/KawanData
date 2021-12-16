@component('mail::message')
# Berhasil Gabung ke dalam Course

Halo {{$checkout->User->name}},
<br>
Kami sudah mengkonfirmasi bahwa kamu sudah resmi bergabung ke dalam course <b>{{$checkout->Course->Title}}</b>. 
<br>
<br>
Silahkan tekan tombol dibawah untuk gabung ke grup telegram Kawan Data agar bisa membahas dan berdiskusi seputar data.
@component('mail::button', ['url' => 'https://t.me/kawan_data'])
Gabung ke Grup
@endcomponent

Salam hangat,<br>
<br>
Eric Julianto<br>
Project Manager<br>
Kawan Data Indonesia<br>
@endcomponent
