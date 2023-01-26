<x-mail::message>
# Nom Client : {{ $name }}
# Email : {{ $email }}

{{ $message }}

<x-mail::button :url="'https://www.ltcgroup.cm'">
Visitez nous
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
