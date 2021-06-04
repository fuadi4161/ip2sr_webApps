@component('mail::message')
    # Registrasi For Apps

    Hai.. Assalamualikum..
    Alhamdulillah... gak kerasa sudah awal bulan lagi.. oiya jangan sampai wifi off karena lupa bayar tagihan listrik yaa. :D 
    
    silahkan Login ke website kemudian lengkapi profil anda.
@component('mail::button',['url'  => 'https://ip2sr.site/login'])
    Go to login
@endcomponent

Thanks,<br>
{{config('app.name')}}
@endcomponent