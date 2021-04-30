@component('mail::message')
    # Registrasi For Apps

    Selamat anda telah terdaftar di Website IP2SR
    sekarang anda sudah bisa login di website & aplikasi mobile sebagai member wifi. 
    silahkan Login ke website kemudian lengkapi profil anda.
@component('mail::button',['url'  => 'https://ip2sr.site/login'])
    Go to login
@endcomponent
@component('mail::button',['url'  => 'http://bit.ly/Apps_download'])
    Go to download Apps
@endcomponent

Thanks,<br>
{{config('app.name')}}
@endcomponent