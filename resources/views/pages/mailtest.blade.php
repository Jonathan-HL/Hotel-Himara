<h1>test ok</h1>
@component('mail::message')
# Bienvenue!
Your message body.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
