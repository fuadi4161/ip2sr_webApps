@component('mail::message')
    # Registrasi For Apps

    Admin telah menambahkan bonus kecepatan.
    jika mau segera buka aplikasi untuk mengeclaim bonus.
    oiya .. bonus ini hanya terbatas jika sudah di claim user lain anda tidak bisa untuk mengeclaim bonus tersebut.
@component('mail::button',['url'  => 'https://ip2sr.site/login'])
    Go to login for download apk
@endcomponent

Thanks,<br>
{{config('app.name')}}
@endcomponent