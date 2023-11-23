<x-mail::message>
# Akun Login

Username: <b>{{ $username }}</b><br>
Password: <b>{{ $password }}</b>

<x-mail::button :url="config('app.url')">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
