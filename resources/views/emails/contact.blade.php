@component('mail::message')
# Greetings from {{ config('app.name') }}.

Hello {{ $data['name'] }},  

Thankyou for reaching out to us. We will get back to you as soon as possible. You may also reply to this email if you have any query.

Regards,<br>
{{ config('app.name') }}
@endcomponent
